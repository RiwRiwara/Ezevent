<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Utils\Filepond\FileUploadController;
use App\Utils\Filepond\UploadImageController;
use App\Utils\Filepond\LoadImageController;

// Language Switch
Route::post("language-switch", [LanguageController::class, 'languageSwitch'])->name('language.switch');


Route::middleware('auth', 'verified')->group(function () {

    // Proccess File Upload
    Route::post('uploads/process', [FileUploadController::class, 'process'])->name('uploads.process');

    // Upload Image
    Route::post('image/profile/upload', [UploadImageController::class, '__invoke'])->name('images.profile.upload');

    // Get profile
    Route::get('/load-profile-img/{img_url}',LoadImageController::class)->name('load-profile-img');
    

});

