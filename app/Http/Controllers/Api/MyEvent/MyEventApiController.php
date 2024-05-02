<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\EventParticipants;


class MyEventApiController extends Controller
{
    /**
     * Get all events that the user has joined. [T]
     * 
     * Get all events that the user has joined and return an array of event objects.
     * 
     * ดึงข้อมูลกิจกรรมทั้งหมดที่ผู้ใช้เข้าร่วมและส่งคืนอาร์เรย์ของอ็อบเจ็กต์กิจกรรม
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @param String $type The type of event to retrieve. [Staff or Participant]
     * 
     * @param string $progress The progress of the event to retrieve. [Pre, IsCheckIn, IsCheckOut, IsReviewed, IsCompleted]
     * 
     * @param string $status The status of the event to retrieve. [Normal, Cancelled, Removed, Late]
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getAllMyEvent(
        Request $request,
        String $type = EventParticipants::ROLE_PARTICIPANT,
        string $progress = EventParticipants::PROGRESS_PRE,
        string $status =  EventParticipants::STATUS_NORMAL
    ) {

        return (new AllMyEvent())->getMyEventAll(
            $request,
            $type,
            $progress,
            $status
        );
    }

    /**
     * Get all events that the user has saved. [T]
     * 
     * Get all events that the user has saved and return an array of event objects.
     * 
     * ดึงข้อมูลกิจกรรมทั้งหมดที่ผู้ใช้บันทึกและส่งคืนอาร์เรย์ของอ็อบเจ็กต์กิจกรรม
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getSavedEvent(Request $request)
    {
        return (new GetSavedEvent())->getSavedEvent();
    }

    /**
     * Save an event. [T]
     * 
     * Save an event to the user's saved events.
     * 
     * บันทึกกิจกรรมไปยังกิจกรรมที่บันทึกไว้ของผู้ใช้
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function saveEvent(Request $request)
    {
        return (new SaveEvent())->saveEvent($request);
    }
}
