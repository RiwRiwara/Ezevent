<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;


class LogoutUserController extends Controller
{
    private Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function __invoke(Request $request)
    {
        return $this->logout($request);
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

        try {
            $request->user()->tokens()->delete();
        } catch (\Exception $e) {
            throw new HttpResponseException(response()->json(['error' => 'Failed to logout. Please try again.'], 500));
        }

        return response()->json([
            'message' => 'You have been logged out successfully',
            'success' => 'true'
        ], 200);
    }
}
