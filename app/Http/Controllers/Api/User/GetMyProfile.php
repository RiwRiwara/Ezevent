<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class GetMyProfile extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke()
    {
        return $this->getMyProfile();
    }

    public function getMyProfile()
    {
        $user = auth()->user();
        return response()->json([
            'message' => 'User found',
            'user' => new UserResource($user)
        ], 200);
    }
}
