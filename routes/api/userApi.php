<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/{user_id}', [UserController::class, 'getUserByID'])->name('get_user_by_id');
    Route::put('/user', [UserController::class, 'updateByFieldsName'])->name('update_user_by_fields_name');
    Route::post('/uploadprofileimage', [UserController::class, 'uploadUserProfile'])->name('upload_profile_image');
});

Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});
