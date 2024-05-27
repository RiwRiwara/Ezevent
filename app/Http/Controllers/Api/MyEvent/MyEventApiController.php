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
     * Save an event.
     * 
     * บันทึกกิจกรรม
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @param String $event_id The ID of the event to save.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function saveEvent(Request $request, String $event_id)
    {
        return (new SaveEvent())->saveEvent($request, $event_id);
    }


    /**
     * Perform an action on an event. [T]
     * 
     * Perform an action on an event and return the result.
     * 
     * ดำเนินการทำงานใด ๆ บนกิจกรรมและส่งคืนผลลัพธ์
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @param String $action The action to perform on the event. [CheckIn, CheckOut, Review, Complete]
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function actionEvent(Request $request, String $event_participant_id, String $action)
    {
        return (new ActionEvent())->actionEvent($request, $event_participant_id, $action);
    }

    /**
     * Change the status of an event. [T]
     * 
     * Change the status of an event and return the result.
     * 
     * เปลี่ยนสถานะของกิจกรรมและส่งคืนผลลัพธ์
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @param String $status The status to change the event to. [Normal, Cancelled, Removed, Late]
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function changeStatusMyEvent(Request $request, String $event_participant_id, String $status)
    {
        return (new ChangeStatusMyEvent())->changeStatusMyEvent($request, $event_participant_id, $status);
    }

    /**
     * Check if the user has already joined an event. [T]
     * 
     * Check if the user has already joined an event and return the result.
     * 
     * ตรวจสอบว่าผู้ใช้เข้าร่วมกิจกรรมแล้วหรือไม่และส่งผลลัพธ์
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     * 
     */

    public function checkIsAlreadyApplication(Request $request, String $event_id)
    {
        return (new CheckIsAlreadyApplication())->checkIsAlreadyApplication($request, $event_id);
    }
}
