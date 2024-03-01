<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Tools\FileUploadController;
use App\Http\Controllers\Tools\UploadImageController;

// uploaded file
Route::post('uploads/process', [FileUploadController::class, 'process'])->name('uploads.process');
Route::post('images/uploaded', [UploadImageController::class, '__invoke'])->name('images.uploaded');

// Return Back to the previous page
Route::get('back', function () {
    return back();
})->name('back');

// Language Switch
Route::post("language-switch", [LanguageController::class, 'languageSwitch'])->name('language.switch');


Route::get('/summary', [ChartController::class, 'showChart'])->name('summary');
