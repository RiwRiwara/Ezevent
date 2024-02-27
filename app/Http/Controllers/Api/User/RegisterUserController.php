<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterUserController extends Controller
{
    private RegisterRequest $request;
    public function __construct(RegisterRequest $request)
    {
        $this->request = $request;
    }

    public function __invoke(RegisterRequest $request){
        return $this->register($request);
    }
    
    public function register(RegisterRequest $request)
    {

        $date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
        $user = User::create([
            'user_id' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
            'date_of_birth' => $date_of_birth,
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
