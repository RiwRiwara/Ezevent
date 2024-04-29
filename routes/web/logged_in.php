<?php

use App\Http\Controllers\Admin\Event\AllEventController;
use App\Http\Controllers\Admin\User\AllUserContoller;
use App\Http\Controllers\Admin\Users\AllUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UploadUserProfileController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Models\User;


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/summary', [ChartController::class, 'showChart'])->name('summary');


    Route::get('/my-profile', [ProfileController::class, 'myProfileDetail'])->name('my-profile');
    
    Route::post('/my-profile/upload-profile-img', UploadUserProfileController::class)->name('upload-profile-img');

    Route::get('/dashboard',[DashboardController::class, "showDashboard"])->name('dashboard');




    Route::get('/event-page', function () {
        return view('logged_in.event_page');
    })->name('event-page');

    Route::get('/participantpage', function () {
        return view('logged_in.participant_page');
    })->name('participantpage');
    Route::get('/crm-home-page', function () {
        return view('logged_in.crm_home_page');
    })->name('crm-home-page');
    Route::get('/message-crm', function () {
        return view('logged_in.message_crm');
    })->name('message-crm');

    Route::get('/email_confirm', function () {
        return view('mailTemplate.email_confirm');
    })->name('email_confirm');
    Route::get('/register_complete', function () {
        return view('mailTemplate.register_complete');
    })->name('register_complete');
    Route::get('/reset_password', function () {
        return view('mailTemplate.reset_password');
    })->name('reset_password');
    Route::get('/reset_password_complete', function () {
        return view('mailTemplate.reset_password_complete');
    })->name('reset_password_complete');

    // admin
    Route::get('/admin_events_dashboard',AllEventController::class)->name('admin_events_dashboard');
    Route::get('/admin_users_dashboard',AllUserController::class)->name('admin_users_dashboard');

    Route::post('/profile/update', [UserController::class, 'updateUserInformation'])->name('profile.update.field');
});
