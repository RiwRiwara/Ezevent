<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MyEvent\MyEventApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/event/myevent/{type}/{progress}/{status}',[MyEventApiController::class, 'getAllMyEvent'])->name('api.myevent.get_all_myevent');
    Route::post('/event/saveevent',[MyEventApiController::class, 'saveEvent'])->name('api.myevent.save_event');
    Route::get('/event/savedevent',[MyEventApiController::class, 'getSavedEvent'])->name('api.myevent.get_saved_event');

    Route::post('/event/myevent/{event_participant_id}/{action}',[MyEventApiController::class, 'actionEvent'])->name('api.myevent.action_event');
    Route::post('/event/myevent/{event_participant_id}/{status}',[MyEventApiController::class, 'changeStatusMyEvent'])->name('api.myevent.change_status_myevent');
});
