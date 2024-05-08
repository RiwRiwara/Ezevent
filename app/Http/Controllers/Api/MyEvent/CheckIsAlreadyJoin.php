<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\EventParticipants;

class CheckIsAlreadyJoin extends Controller
{
    public function __construct()
    {
        //
    }
    public function __invoke(Request $request, String $event_id)
    {
        return $this->checkIsAlreadyJoin($request, $event_id);
    }
    public function checkIsAlreadyJoin(Request $request, String $event_id)
    {
        $user = $request->user();
        $eventParticipant = EventParticipants::where('event_id', $event_id)->where('user_id', $user->user_id)->first();
        if ($eventParticipant) {
            return response()->json([
                'isAlreadyJoin' => true,
                'event_participant_id' => $eventParticipant->event_participant_id
            ]);
        } else {
            return response()->json([
                'isAlreadyJoin' => false
            ]);
        }
    }
}
