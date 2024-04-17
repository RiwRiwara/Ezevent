<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MyEvent\MyEventApiController;


Route::middleware('auth:sanctum')->group(function () {
    Route::get(
        '/event/myevent/{type}/{progress}/{status}',
        [MyEventApiController::class, 'getAllMyEvent']
    )->name('api.event.get_my_event_all_as_participant');
});
