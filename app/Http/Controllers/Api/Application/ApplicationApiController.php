<?php

namespace App\Http\Controllers\Api\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Event\ParticipantApplicationRequest;

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


    /**
     * Get my applications [T]
     * 
     * Retrieves all applications for the current user and returns an array of application objects.
     * 
     * ดึงข้อมูลการสมัครของฉันทั้งหมด
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getMyApplication()
    {
        return (new GetMyApplication())->getMyApplication();
    }
}
