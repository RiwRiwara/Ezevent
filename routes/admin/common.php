<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\Event\AllEventController;
use App\Http\Controllers\Admin\Users\AllUserController;
use App\Http\Controllers\Admin\Event\EventDetailController;
use App\Http\Controllers\Admin\Users\UserDetailController;

Route::get('/test-admin', function () {
    return response()->json(['message' => 'Admin is working...', 'role' => auth()->user()->role->name]);
});

// admin
Route::get('/events-dashboard', AllEventController::class)->name('events-dashboard');
Route::get('/users-dashboard', AllUserController::class)->name('users-dashboard');
Route::get('/event-dashboard/{event_id}', EventDetailController::class)->name('event-details');
Route::get('/user/{user_id}', UserDetailController::class)->name('user-profile');