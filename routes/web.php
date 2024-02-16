<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use App\Http\Controllers\ChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post("language-switch", [LanguageController::class, 'languageSwitch'])->name('language.switch');
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/create-event', function () {
        return view('guest.createEvent');
    })->name('create-event');
    Route::get('/landing', function () {
        return view('guest.landing');
    })->name('landing');
    
    Route::get('/event-page', function () {
        return view('guest.eventpage');
    })->name('event-page');

    Route::get('/crm-home-page', function () {
        return view('guest.crmhomepage');
    })->name('crm-home-page');
    Route::get('/message-crm', function () {
        return view('guest.messagecrm');
    })->name('message-crm');

});



require __DIR__ . '/auth.php';
