<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventParticipants;
use Illuminate\Support\Facades\Log;

use App\Http\Resources\Api\EventCardResource;
class AllMyEvent extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(
        Request $request,
        String $type = EventParticipants::ROLE_PARTICIPANT,
        string $progress = EventParticipants::PROGRESS_PRE,
        string $status =  EventParticipants::STATUS_NORMAL
    ) {
        return $this->getMyEventAll(
            $request,
            $type,
            $progress,
            $status
        );
    }

    public function getMyEventAll(Request $request, String $type = EventParticipants::ROLE_PARTICIPANT, string $progress = EventParticipants::PROGRESS_PRE, string $status =  EventParticipants::STATUS_NORMAL)
    {
        if ($type == "All") {
            $myEventsJoin = EventParticipants::where('user_id', auth()->user()->user_id)
                ->where('progress', $progress)
                ->where('status', $status)
                ->get();
        } else {
            $myEventsJoin = EventParticipants::where('user_id', auth()->user()->user_id)
                ->where('role', $type)
                ->where('progress', $progress)
                ->where('status', $status)
                ->get();
        }
        $events = Event::whereIn('event_id', $myEventsJoin->pluck('event_id'))->get();

        if ($events->count() > 0) {
            return response()->json([
                'message' => 'Events found !!!',
                'events' => array_map(function ($event) {
                    return new EventCardResource($event);
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
