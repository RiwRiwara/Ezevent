<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;


class LoginUserController extends Controller
{
    private LoginRequest $request;

    public function __construct(LoginRequest $request)
    {
        $this->request = $request;
    }

    public function __invoke(LoginRequest $request){
        return $this->login($request);
    }

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
    public function login(LoginRequest $request) : \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details',
                'success' => 'false'
            ], 401);
        }
        $user = auth()->user();
        $role = 'role:participant';

        if ($user->role_id == 1) {
            $role = 'role:admin';
        } else if ($user->role_id == 2) {
            $role = 'role:participant';
        } else if ($user->role_id == 3) {
            $role = 'role:organizer';
        }

        $token = $request->user()->createToken('authToken', [$role], now()->addDay());
        return response()->json([
            'message' => 'You have been logged in',
            'token' => $token->plainTextToken,
            'user' => new UserResource($user),
            'success' => 'true'
        ], 200);
    }

}
