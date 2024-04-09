<?php

namespace App\Http\Controllers\Api\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Event\ParticipantApplicationRequest;
use App\Http\Resources\ApplicationResource;

class ApplicationApiController extends Controller
{

    /**
     * Participant Application [T]
     * 
     * Allows a participant to apply for an event.
     * 
     * อนุญาตให้ผู้เข้าร่วมสมัครเข้าร่วมกิจกรรม
     * 
     * @param ParticipantApplicationRequest $request The request object containing the participant's application data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */

    public function participantApplication(ParticipantApplicationRequest $request)
    {

        return (new ParticipantApplication())->participantApplication($request);
    }
}
