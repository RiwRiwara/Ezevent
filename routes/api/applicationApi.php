<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Application\ApplicationApiController;


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/event/participant-application', [ApplicationApiController::class, 'participantApplication'])->name('api.application.participant_application');
    Route::get('/event/get-my-application', [ApplicationApiController::class, 'getMyApplication'])->name('api.application.get_my_application');
});
