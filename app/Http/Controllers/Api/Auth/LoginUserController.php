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
                'message' => 'Invalid login details'
            ], 401);
        }
        $user = auth()->user();
        $token = $request->user()->createToken('authToken', ['role:participant'], now()->addDay());
        return response()->json([
            'message' => 'You have been logged in',
            'user' => new UserResource($user),
            'token' => $token->plainTextToken
        ]);
    }

}
