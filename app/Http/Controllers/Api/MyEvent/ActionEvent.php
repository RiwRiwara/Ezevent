<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\EventParticipants;

class ActionEvent extends Controller
{

    public function __construct()
    {
    }

    public function __invoke(Request $request, String $event_participant_id, String $action)
    {
        return $this->actionEvent($request, $event_participant_id, $action);
    }


    public function actionEvent(Request $request, String $event_participant_id, String $action)
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

            // Check if the action is valid
            if (!in_array($action, [
                EventParticipants::ACTION_CHECK_IN,
                EventParticipants::ACTION_CHECK_OUT,
                EventParticipants::ACTION_REVIEW,
                EventParticipants::ACTION_COMPLETE
            ])) {
                return response()->json([
                    'message' => 'Invalid action',
                    'success' => 'false'
                ], 400);
            }

            // Check if the action is valid for the current progress
            if ($action == EventParticipants::ACTION_CHECK_IN && $eventParticipant->progress != EventParticipants::PROGRESS_PRE) {
                return response()->json([
                    'message' => 'Invalid action for the current progress',
                    'success' => 'false'
                ], 400);
            }

            if ($action == EventParticipants::ACTION_CHECK_OUT && $eventParticipant->progress != EventParticipants::PROGRESS_IS_CHECK_IN) {
                return response()->json([
                    'message' => 'Invalid action for the current progress',
                    'success' => 'false'
                ], 400);
            }

            // if ($action == EventParticipants::ACTION_REVIEW && $eventParticipant->progress != EventParticipants::PROGRESS_IS_CHECK_OUT) {
            if ($action == EventParticipants::ACTION_REVIEW && $eventParticipant->progress != EventParticipants::PROGRESS_IS_CHECK_IN) {
                return response()->json([
                    'message' => 'Invalid action for the current progress',
                    'success' => 'false'
                ], 400);
            }

            if ($action == EventParticipants::ACTION_COMPLETE && $eventParticipant->progress != EventParticipants::PROGRESS_IS_REVIEWED) {
                return response()->json([
                    'message' => 'Invalid action for the current progress',
                    'success' => 'false'
                ], 400);
            }

            // Perform the action
            if ($action == EventParticipants::ACTION_CHECK_IN) {
                EventParticipants::changeProgress($event_participant_id, EventParticipants::PROGRESS_IS_CHECK_IN);
            }

            if ($action == EventParticipants::ACTION_CHECK_OUT) {
                EventParticipants::changeProgress($event_participant_id, EventParticipants::PROGRESS_IS_CHECK_OUT);
            }

            if ($action == EventParticipants::ACTION_REVIEW) {
                EventParticipants::changeProgress($event_participant_id, EventParticipants::PROGRESS_IS_REVIEWED);
            }

            if ($action == EventParticipants::ACTION_COMPLETE) {
                EventParticipants::changeProgress($event_participant_id, EventParticipants::PROGRESS_IS_COMPLETED);
            }

            return response()->json([
                'participant_id' => $event_participant_id,
                'action' => $action,
                'message' => 'Action performed successfully',
                'success' => 'true'
            ], 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json([
                'message' => 'An error occurred',
                'success' => 'false'
            ], 500);
        }
    }
}
