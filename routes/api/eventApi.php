<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Event\EventApiController;

Route::get('/event/{event_id}', [EventApiController::class, 'getEventById'])->name('api.event.get_event_by_id');

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/event/participant-application', [EventApiController::class, 'participantApplication'])->name('api.event.participant_application');
});

