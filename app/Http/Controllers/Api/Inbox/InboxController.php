<?php

namespace App\Http\Controllers\Api\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{

    /**
     * Get all inbox user has [T]
     * 
     * Get all inbox messages user has and an array of inbox objects.
     * 
     * ดึงข้อความกล่องจดหมายทั้งหมดที่ผู้ใช้มีและอาร์เรย์ของอ็อบเจ็กต์กล่องจดหมาย
     * 
     * @param Request $request The request object containing the user's data.
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */

    public function getMyInbox(Request $request)
    {
        return (new GetMyInbox())->getMyInbox($request);   
    }
}     
