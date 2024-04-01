<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\Auth\MobileRegisterRequest;
use App\Http\Requests\Auth\LoginRequest;


class AuthApiController extends Controller
{
    /**
     * Login the user. [NT]
     * 
     * Login the user and create a new token for them.
     * 
     * เข้าสู่ระบบผู้ใช้และสร้างโทเค็นใหม่สำหรับพวกเขา
     *
     * @param  LoginRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        return (new LoginUserController($request))->login($request);
    }

    /**
     * Logout the  user. [T]
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
        return (new LogoutUserController($request))->logout($request);
    }


    /**
     * Register a new user. [NT]
     * 
     * Register a new user and create a new token for them.
     * 
     * ลงทะเบียนผู้ใช้ใหม่และสร้างโทเค็นใหม่สำหรับพวกเขา
     * 
     * @param  MobileRegisterRequest  $request
     * @return \Illuminate\Http\JsonResponse
     * 
     */
    public function register(MobileRegisterRequest $request)
    {
        return (new RegisterUserController($request))->register($request);

    }
}
