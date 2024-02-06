<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// tset api
Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::get('/user/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});
Route::get('/users', function () {
    return UserResource::collection(User::all());
});