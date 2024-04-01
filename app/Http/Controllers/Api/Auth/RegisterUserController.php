<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\MobileRegisterRequest;

class RegisterUserController extends Controller
{
    private MobileRegisterRequest $request;
    
    public function __construct(MobileRegisterRequest $request)
    {
        $this->request = $request;
    }

    public function __invoke(MobileRegisterRequest $request){
        return $this->register($request);
    }
    
    public function register(MobileRegisterRequest $request)
    {

        $user = User::create([
            'user_id' => Str::uuid(),
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('authToken', ['role:participant'], now()->addDay());

        return response()->json([
            'message' => 'User registered successfully',
            'user' => new UserResource($user),
            'token' => $token->plainTextToken,
            'success' => 'true'
        ], 201);
    }
}
