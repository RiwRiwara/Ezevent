<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class GetAllUser extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getAllUser($request);
    }

    public function getAllUser()
    {
        $users = User::all();
    
        if ($users->isNotEmpty()) {
            return response()->json([
                'message' => 'All users found',
                'users' => UserResource::collection($users)
            ], 200);
        } else {
            return response()->json([
                'message' => 'No users found'
            ], 404);
        }
    }
}
