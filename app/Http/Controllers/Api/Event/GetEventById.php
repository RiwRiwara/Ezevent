<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Resources\EventResource;


class GetEventById extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getEventById($request);
    }

    public function getEventById(string $event_id)
    {
        $event = Event::where('event_id', $event_id)->first();
        if ($event) {
            return response()->json([
                'message' => 'Event found',
                'event' => new EventResource($event),
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Event not found...'
            ], 404);
        }
    }
}
