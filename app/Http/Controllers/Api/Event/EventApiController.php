<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;

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
}
