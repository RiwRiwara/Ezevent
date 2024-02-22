<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AuthApiController extends Controller
{
    /**
     * Login the user. [NT]
     * 
     * Login the user and create a new token for them.
     * 
     * เข้าสู่ระบบผู้ใช้และสร้างโทเค็นใหม่สำหรับพวกเขา
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        // get the authenticated user
        $user = auth()->user();

        // delete existing tokens
        $user->tokens()->delete();

        // create auth token and expire in 1 day
        $token = $request->user()->createToken('authToken', ['role:participant'], now()->addDay());

        return response()->json([
            'message' => 'You have been logged in',
            'user' => new UserResource($user),
            'token' => $token->plainTextToken
        ]);
    }


    /**
     * Logout the authenticated user. [T]
     * 
     * Logout the authenticated user and invalidate their token.
     * 
     * ออกจากระบบผู้ใช้ที่ได้รับการรับรองความถูกต้องและทำให้โทเค็นของพวกเขาใช้ไม่ได้
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        // Attempt to invalidate the user's token
        try {
            $request->user()->tokens()->delete();
        } catch (\Exception $e) {
            \Log::error('Failed to delete tokens for user ' . $request->user()->id . ': ' . $e->getMessage());
            return response()->json(['error' => 'Failed to logout. Please try again.'], 500);
        }

        return response()->json(['message' => 'You have been logged out successfully']);
    }


    /**
     * Register a new user. [NT]
     * 
     * Register a new user and create a new token for them.
     * 
     * ลงทะเบียนผู้ใช้ใหม่และสร้างโทเค็นใหม่สำหรับพวกเขา
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     * 
     */

    public function register(RegisterRequest $request)
    {
        if ($request->password !== $request->password_confirmation) {
            return response()->json([
                'message' => 'Password and Confirm Password do not match'
            ], 400);
        }

        if ($request->address === null || $request->province === null || $request->district === null || $request->city === null || $request->zipcode === null) {
            return response()->json([
                'message' => 'Please fill in the address information'
            ], 400);
        }

        $email = User::where('email', $request->email)->first();
        if ($email) {
            return response()->json([
                'message' => 'Email already exists'
            ], 400);
        }

        $mobile_number = User::where('mobile_number', $request->mobile_number)->first();
        if ($mobile_number) {
            return response()->json([
                'message' => 'Mobile number already exists'
            ], 400);
        }

        $date_birth = date('Y-m-d', strtotime($request->date_birth));
        $user = User::create([
            'user_id' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
            'date_of_birth' => $date_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'province' => $request->province,
            'district' => $request->district,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
        ]);

        // create auth token and expire in 1 day
        $token = $user->createToken('authToken', ['role:participant'], now()->addDay());

        return response()->json([
            'message' => 'User registered successfully',
            'user' => new UserResource($user),
            'token' => $token->plainTextToken
        ], 201);

    }
}
