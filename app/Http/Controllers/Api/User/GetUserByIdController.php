<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class GetUserByIdController extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getUserByID($request);
    }

    public function getUserByID(string $user_id)
    {
        $user = User::where('user_id', $user_id)->first();
        if ($user) {
            return response()->json([
                'message' => 'User found',
                'user' => new UserResource($user)
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }
}
