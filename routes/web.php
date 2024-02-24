<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;


Route::post("language-switch", [LanguageController::class, 'languageSwitch'])->name('language.switch');

\Livewire\Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/update', $handle);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function () {

    Route::get('/', function (Request $request) {
        $userAgent = $request->header('User-Agent');
        return view('welcome', ['userAgent' => $userAgent]);
    });
});

Route::get('/summary', [ChartController::class, 'showChart'])->name('summary');

Route::middleware('auth')->group(function () {
    
    Route::get('/create-event', function () {
        return view('guest.createEvent');
    })->name('create-event');
    Route::get('/landing', function () {
        return view('guest.landing');
    })->name('landing');
 
    Route::get('/my-profile',[ProfileController::class, 'myProfileDetail'])->name('my-profile');

    Route::get('/event-page', function () {
        return view('guest.eventpage');
    })->name('event-page');
    Route::get('/participantpage', function () {
        return view('guest.participantpage');
    })->name('participantpage');
    Route::get('/crm-home-page', function () {
        return view('guest.crmhomepage');
    })->name('crm-home-page');
    Route::get('/message-crm', function () {
        return view('guest.messagecrm');
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



require __DIR__ . '/auth.php';
