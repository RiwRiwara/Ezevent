<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Inbox\InboxController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/my-inbox', [InboxController::class, 'getMyInbox'])->name('my-inbox');
});

