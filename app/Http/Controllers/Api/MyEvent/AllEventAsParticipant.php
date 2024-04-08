<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use App\Models\Event;


class AllEventAsParticipant extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getMyEventAll($request);
    }

    public function getMyEventAll()
    {
        $events = Event::orderBy('created_at', 'desc')->take(5)->get();

        if ($events) {
            return response()->json([
                'message' => 'Events found',
                'events' => array_map(function ($event) {
                    return new EventResource($event);
                }, $events->all()),
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Events not found'
            ], 404);
        }
    }
}
