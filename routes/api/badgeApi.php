<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Badge\BadgeApiController;


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/badge/{id}', [ BadgeApiController::class, 'getBadgeById'])->name('badge.getBadgeById');
    Route::get('/mybadges', [ BadgeApiController::class, 'getMyBadges'])->name('badge.getMyBadges');

});