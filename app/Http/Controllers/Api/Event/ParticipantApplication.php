<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\Event\ParticipantApplicationRequest;
use App\Models\Application;
use App\Http\Resources\ApplicationResource;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ParticipantApplication extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(ParticipantApplicationRequest $request)
    {
        $this->participantApplication($request);
    }

    public function participantApplication(ParticipantApplicationRequest $request)
    {
        $event = Event::where('event_id', $request->event_id)->first();
        $user = User::where('user_id', $request->user_id)->first();


        $existingApplication = Application::where('event_id', $event->event_id)
            ->where('user_id', $user->user_id)
            ->first();

        if ($existingApplication) {
            return response()->json([
                'status' => 'error',
                'message' => 'You have already submitted an application for this event.',
            ], 409);
        }

        try {
            $application = Application::create([
                'application_id' => uniqid('application_'),
                'event_id' => $event->event_id,
                'user_id' => $user->user_id,
                'form_id' => $request->form_id ?? null,
                'type' => $request->type,
                'status' => 'pending',
                'message' => $request->message ?? null,
                'application_date' => now(),
            ]);


            return response()->json([
                'status' => 'success',
                'message' => 'Application submitted successfully.',
                'application' => new ApplicationResource($application)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while processing your request.'.$e->getMessage(),
            ], 500);
        }
    }
}
