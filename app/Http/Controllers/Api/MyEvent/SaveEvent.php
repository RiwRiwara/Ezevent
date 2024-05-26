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
    public function __invoke(Request $request, String $event_id)
    {
        return $this->saveEvent($request, $event_id);
    }

    public function saveEvent($request, $event_id)
    {
        

        // Check if the event is already saved
        $event = SavedEvents::where('user_id', auth()->user()->user_id)
            ->where('event_id', $event_id)
            ->first();

        if ($event) {
            return response()->json([
                'message' => 'Event already saved',
                'success' => 'false'
            ], 400);
        }

        $savedEvent = new SavedEvents();
        $savedEvent->user_id = auth()->user()->user_id;
        $savedEvent->event_id = $event_id;
        $savedEvent->save();


        return response()->json([
            'message' => 'Event saved successfully',
            'success' => 'true'
        ], 200);
    }
}
