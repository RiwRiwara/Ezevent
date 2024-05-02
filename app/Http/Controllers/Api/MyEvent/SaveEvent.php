<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SavedEvents;

class SaveEvent extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->saveEvent($request);
    }

    public function saveEvent($request)
    {
        $request->validate([
            'event_id' => 'required'
        ]);

        $savedEvent = new SavedEvents();
        $savedEvent->user_id = auth()->user()->user_id;
        $savedEvent->event_id = $request->event_id;
        $savedEvent->save();

        return response()->json([
            'message' => 'Event saved successfully',
            'success' => 'true'
        ], 200);
    }
}
