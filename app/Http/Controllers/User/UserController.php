<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    
    public function index(Request $request)
    {
        return UserResource::collection(User::all());
    }


    public function store(Request $request)
    {
        //
    }

    public function show($user_id)
    {
        $user = User::where('user_id', $user_id)->firstOrFail();
        return new UserResource($user);
    }
    public function update(Request $request, $id)
    {
        // Update user by 
        
    }

    public function destroy($id)
    {
        //
    }

    public function restore($id)
    {
        //
    }
}
