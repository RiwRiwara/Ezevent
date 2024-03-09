<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event\CreateEvent\CreateEventPageController;
use App\Http\Controllers\Event\CreateEvent\StoreEventController;
use App\Http\Controllers\Event\EventList\EventListController;


Route::middleware('auth', 'verified')->group(function () {

    // pre create event
    Route::get('/create-event', CreateEventPageController::class)->name('create-event');
    Route::post('/create-event', StoreEventController::class)->name('store-event');

    Route::get('/event-list', EventListController::class)->name('event-list');

});
