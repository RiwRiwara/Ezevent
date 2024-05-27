<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SavedEvents;
use App\Http\Resources\EventResource;

class GetSavedEvent extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return $this->getSavedEvent();
    }

    public function getSavedEvent()
    {

        $mySavedEvents = SavedEvents::with('event')->where('user_id', auth()->user()->user_id)->get();
        
        foreach ($mySavedEvents as $mySavedEvent) {
            $mySavedEvent['event'] = new EventResource($mySavedEvent->event);
        }

        if ($mySavedEvents) {
            return response()->json([
                'message' => 'Events found !!!',
                'events' => $mySavedEvents,
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Events not found'
            ], 200);
        }
    }
}
