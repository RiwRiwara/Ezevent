<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendEmailVerify extends Controller
{

    public function __construct()
    {
    }

    public function __invoke(Request $request)
    {
        return $this->sendEmailVerify($request);
    }

    public function sendEmailVerify(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified',
                'success' => 'false'
            ], 200);
        }

        $request->user()->sendEmailVerificationNotification();

        return response()->json([
            'message' => 'Verification link sent',
            'success' => 'true'
        ], 200);
    }
}
