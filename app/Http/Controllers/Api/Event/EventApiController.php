<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use Illuminate\Http\Request;

class EventApiController extends Controller
{
    /**
     * Get event by event_id [NT]
     * 
     * Retrieves a specific event by its event_id and returns an event object.
     * 
     * ดึงข้อมูลกิจกรรมเฉพาะด้วย event_id และส่งคืนอ็อบเจ็กต์กิจกรรม
     * 
     * @param string $event_id The ID of the event to retrieve.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */
    public function getEventById(string $event_id)
    {
        return (new GetEventById())->getEventById($event_id);
    }


    /**
     * Get last events [NT]
     * 
     * Retrieves the last 5 events and returns an array of event objects.
     * 
     * ดึงข้อมูลกิจกรรม 5 กิจกรรมล่าสุดและส่งคืนอาร์เรย์ของอ็อบเจ็กต์กิจกรรม
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */
    public function getLastEvents()
    {
        return (new GetLastEvents())->getLastEvents();
    }

    /**
     * Get all events [NT]
     * 
     * Retrieves all events and returns an array of event objects.
     * 
     * ดึงข้อมูลกิจกรรมทั้งหมดและส่งคืนอาร์เรย์ของอ็อบเจ็กต์กิจกรรม
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getEventAll(Request $request)
    {
        return (new GetAllEventWithQuery())->getEventAll($request);
    }
}
