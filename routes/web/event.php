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
use App\Http\Controllers\Event\EventDetail\Form\EventApplicationListController;
use App\Http\Controllers\Event\EventDetail\DeleteEventController;
use App\Http\Controllers\Event\EventDetail\Participant\EventParticipantListController;
use App\Http\Controllers\Event\EventDetail\UpdateContentController;
use App\Http\Controllers\Event\EventDetail\Staff\EventStaffListController;
use App\Http\Controllers\Event\EventDetail\Message\EventMessageController;
use App\Http\Controllers\Event\EventDetail\During\PublishEvent;
use App\Http\Controllers\Event\EventDetail\During\CancelledEvent;
use App\Http\Controllers\Event\EventDetail\During\ChangePhaseEvent;





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
    Route::post('/event-list/event-detail/content-update/{event_id}', UpdateContentController::class)->name('event-detail-content-update');

    //delete event
    Route::delete('/event-list/{event_id}', DeleteEventController::class)->name('event-delete');

    // Event Application list
    Route::get('/event-application-list/{event_id}', EventApplicationListController::class)->name('event-application-list');

    // Event Participant list
    Route::get('/event-participant-list/{event_id}', EventParticipantListController::class)->name('event-participant-list');

    // Event Staff list
    Route::get('/event-staff-list/{event_id}',  EventStaffListController::class)->name('event-staff-list');

    // Event Message
    Route::get('/event-message/{event_id}', EventMessageController::class)->name('event-message-list');



    // During Event 
    Route::post('/published-event/{event_id}', PublishEvent::class)->name('published-event');
    Route::post('/cancelled-event/{event_id}', CancelledEvent::class)->name('cancelled-event');

    Route::post('/change-phase-event/{event_id}', ChangePhaseEvent::class)->name('change-phase-event');



});
