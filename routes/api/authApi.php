<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthApiController;

Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/register', [AuthApiController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout'])->name('logout');
});


Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});