<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\EventParticipants;

class CheckIsAlreadyApplication extends Controller
{
    public function __construct()
    {
        //
    }
    public function __invoke(Request $request, String $event_id)
    {
        return $this->checkIsAlreadyApplication($request, $event_id);
    }
    public function checkIsAlreadyApplication(Request $request, String $event_id)
    {
        $user = $request->user();
        // Check if user already application to this event
        $eventParticipant = Application::where('event_id', $event_id)->where('user_id', $user->user_id)->first();
        if ($eventParticipant) {
            return response()->json([
                'isAlreadyJoin' => true,
                'event_participant_id' => $eventParticipant->application_id,
                'current_status' => $eventParticipant->status,
                'type' => $eventParticipant->type,
                'message' => "Already applied to this event"
            ]);
        } else {
            return response()->json([
                'isAlreadyJoin' => false
            ]);
        }

    }
}
