<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\EventParticipants;


class ChangeStatusMyEvent extends Controller
{
    public function __construct()
    {
    }

    public function __invoke(Request $request, String $event_participant_id, String $status)
    {
        return $this->changeStatusMyEvent($request, $event_participant_id, $status);
    }

    public function changeStatusMyEvent(Request $request, String $event_participant_id, String $status)
    {
        try {
            $user = $request->user();
            $eventParticipant = EventParticipants::where('event_participant_id', $event_participant_id)->first();

            // Check if the event participant exists and the user is the creator
            if (!$eventParticipant || $eventParticipant->user_id != $user->user_id) {
                return response()->json([
                    'message' => 'Event participant not found',
                    'success' => 'false'
                ], 404);
            }

            // Check if the status is valid
            if (!in_array($status, [
                EventParticipants::STATUS_NORMAL,
                EventParticipants::STATUS_CANCELLED,
                EventParticipants::STATUS_REMOVED,
                EventParticipants::STATUS_LATE
            ])) {
                return response()->json([
                    'message' => 'Invalid status',
                    'success' => 'false'
                ], 400);
            }

            // Check if the status is valid for the current progress
            if ($status == EventParticipants::STATUS_CANCELLED && $eventParticipant->progress != EventParticipants::PROGRESS_PRE) {
                return response()->json([
                    'message' => 'Invalid status for the current progress',
                    'success' => 'false'
                ], 400);
            }

            if ($status == EventParticipants::STATUS_REMOVED && $eventParticipant->progress != EventParticipants::PROGRESS_IS_CHECK_IN) {
                return response()->json([
                    'message' => 'Invalid status for the current progress',
                    'success' => 'false'
                ], 400);
            }

            if ($status == EventParticipants::STATUS_LATE && $eventParticipant->progress != EventParticipants::PROGRESS_IS_CHECK_OUT) {
                return response()->json([
                    'message' => 'Invalid status for the current progress',
                    'success' => 'false'
                ], 400);
            }

            $eventParticipant->status = $status;
            $eventParticipant->save();

            return response()->json([
                'message' => 'Status changed successfully',
                'success' => 'true'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred',
                'success' => 'false'
            ], 500);
        }
    }
}
