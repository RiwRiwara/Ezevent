<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateByFieldsName extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function __invoke(Request $request)
    {
        return $this->updateByFieldsName($request);
    }

    public function updateByFieldsName(Request $request)
    {
        $user = User::where('user_id', auth()->user()->user_id)->first();

        if ($user) {
            $user->update($request->all());
            return response()->json([
                'message' => 'User updated',
                'user' => new UserResource($user)
            ], 200);

        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }
}
