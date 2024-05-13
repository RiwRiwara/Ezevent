<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MyEvent\MyEventApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/event/myevent/{type}/{progress}/{status}',[MyEventApiController::class, 'getAllMyEvent'])->name('api.myevent.get_all_myevent');
    Route::post('/event/saveevent',[MyEventApiController::class, 'saveEvent'])->name('api.myevent.save_event');
    Route::get('/event/savedevent',[MyEventApiController::class, 'getSavedEvent'])->name('api.myevent.get_saved_event');

    Route::post('/event/myevent/{event_participant_id}/progress/{action}',[MyEventApiController::class, 'actionEvent'])->name('api.myevent.action_event');
    Route::post('/event/myevent/{event_participant_id}/status/{status}',[MyEventApiController::class, 'changeStatusMyEvent'])->name('api.myevent.change_status_myevent');

    Route::get('/event/myevent/{event_id}/isalreadyjoin',[MyEventApiController::class, 'checkIsAlreadyApplication'])->name('api.myevent.check_is_already_join');
});
