<?php

namespace App\Http\Controllers\Api\MyEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use Illuminate\Support\Facades\Log;

class MyEventApiController extends Controller
{
    /**
     * Get my event all paginate 10 [T]
     * 
     * Retrieves all events that the user Join and returns an array of event objects.
     * 
     * ดึงข้อมูลกิจกรรมทั้งหมดที่ผู้ใช้เข้าร่วมและส่งคืนอาร์เรย์ของอ็อบเจ็กต์กิจกรรม
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getMyEventAllAsParticipant(Request $request)
    {

        return (new AllEventAsParticipant())->getMyEventAll($request);
    }
}
