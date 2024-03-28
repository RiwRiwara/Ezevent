<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AdminControllerApi;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/admin-getallusers', [AdminControllerApi::class, 'getAllUsers'])->name('Get_all_users');
});

