<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use App\Http\Resources\ApplicationResource;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Event\ParticipantApplicationRequest;


class EventApiController extends Controller
{
    /**
     * Get event by event_id [T]
     * 
     * Retrieves a specific event by its event_id and returns an event object.
     * 
     * ดึงข้อมูลกิจกรรมเฉพาะด้วย event_id และส่งคืนอ็อบเจ็กต์กิจกรรม
     * 
     * @param string $event_id The ID of the event to retrieve.
     * 
     * @return EventResource A resource object containing the event's data.
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */
    public function getEventById(string $event_id)
    {
        return (new GetEventById())->getEventById($event_id);
    }

    /**
     * Participant Application [T]
     * 
     * Allows a participant to apply for an event.
     * 
     * อนุญาตให้ผู้เข้าร่วมสมัครเข้าร่วมกิจกรรม
     * 
     * @param ParticipantApplicationRequest $request The request object containing the participant's application data.
     * 
     * @return ApplicationResource
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function participantApplication(ParticipantApplicationRequest $request)
    {
        
        return (new ParticipantApplication())->participantApplication($request);
       
    }
}
