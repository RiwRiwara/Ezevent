<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UploadUserProfileController;
use App\Http\Controllers\ChartController;



Route::middleware('auth', 'verified')->group(function () {
    Route::get('/summary', [ChartController::class, 'showChart'])->name('summary');


    Route::get('/my-profile', [ProfileController::class, 'myProfileDetail'])->name('my-profile');
    Route::post('/my-profile/upload-profile-img', UploadUserProfileController::class)->name('upload-profile-img');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/create-event', function () {
        return view('logged_in.create_event');
    })->name('create-event');

    Route::get('/landing', function () {
        return view('logged_in.landing');
    })->name('landing');


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


    Route::post('/profile/update', [UserController::class, 'updateUserInformation'])->name('profile.update.field');
});
