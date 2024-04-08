<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Event\EventApiController;


Route::get('/event/{event_id}/detail', [EventApiController::class, 'getEventById'])->name('api.event.get_event_by_id');
Route::get('/last-event', [EventApiController::class, 'getLastEvents'])->name('api.event.get_last_events');
Route::get('/event/all ', [EventApiController::class, 'getEventAll'])->name('api.event.get_all_events');


Route::middleware('auth:sanctum')->group(function () {
});
