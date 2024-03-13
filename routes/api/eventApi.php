<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Event\EventApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/event/{event_id}', [EventApiController::class, 'getEventById'])->name('api.event.get_event_by_id');
});

Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});
