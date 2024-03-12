<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event\CreateEvent\CreateEventPageController;
use App\Http\Controllers\Event\CreateEvent\StoreEventController;
use App\Http\Controllers\Event\EventList\EventListController;
use App\Http\Controllers\Event\EventDetail\EventDetailController;
use App\Http\Controllers\Event\EventDetail\TypeUpdateController;
use App\Http\Controllers\Event\EventDetail\DateTimeUpdateController;
use App\Http\Controllers\Event\EventDetail\LocationUpdateController;
use App\Http\Controllers\Event\EventDetail\BannerImageUploadController;
use App\Http\Controllers\Event\EventDetail\BannerSettingController;



Route::middleware('auth', 'verified')->group(function () {

    // pre create event
    Route::get('/create-event', CreateEventPageController::class)->name('create-event');
    Route::post('/create-event', StoreEventController::class)->name('store-event');

    // My Event
    Route::get('/event-list', EventListController::class)->name('event-list');
    Route::get('/event-list/{event_id}', EventDetailController::class)->name('event-detail');
    Route::post('/event-list/event-detail/type-update/{event_id}', TypeUpdateController::class)->name('event-detail-type-update');
    Route::post('/event-list/event-detail/datetime-update/{event_id}', DateTimeUpdateController::class)->name('event-detail-datetime-update');
    Route::post('/event-list/event-detail/location-update/{event_id}', LocationUpdateController::class)->name('event-detail-location-update');
    Route::post('/event-list/event-detail/banner-image-upload/{event_id}', BannerImageUploadController::class)->name('event-detail-banner-image-upload');
    Route::post('/event-list/event-detail/banner-setting/{event_id}', BannerSettingController::class)->name('event-detail-banner-setting');
    


    

});
