<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckSessionController extends Controller
{

    public function __construct(Request $request)
    {
    }

    public function __invoke(Request $request)
    {
    }

    public function checkSession(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'Session is not active',
                'is_active' => 'false',
                'success' => 'false'
            ], 401);
        }

        return response()->json([
            'message' => 'Session is active',
            'is_active' => 'true',
            'success' => 'true'
        ], 200);
    }
}
