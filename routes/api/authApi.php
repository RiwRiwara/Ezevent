<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthApiController;

Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/register', [AuthApiController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout'])->name('logout');
    Route::get('/check-session', [AuthApiController::class, 'checkSession'])->name('check-session');
    Route::post('/send-email-verify', [AuthApiController::class, 'sendEmailVerify'])->name('send-email-verify');
});

