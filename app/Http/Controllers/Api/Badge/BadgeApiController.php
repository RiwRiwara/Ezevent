<?php

namespace App\Http\Controllers\Api\Badge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BadgeApiController extends Controller
{

    /**
     * Get Badge by id [NT]
     * 
     * Retrieves a specific Badge by its id and returns an Badge object.
     * 
     * ดึงข้อมูลกิจกรรมเฉพาะด้วย id และส่งคืนอ็อบเจ็กต์กิจกรรม
     * 
     * @param string $id The ID of the Badge to retrieve.
     * 
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * 
     */
    public function getBadgeById(string $id)
    {
        return (new GetBadgeById())->getBadgeById($id);
    }


    /**
     * Get My Badges [T]
     * 
     * Retrieves all Badges that belong to the authenticated user.
     * 
     * ดึงข้อมูลกิจกรรมทั้งหมดที่เป็นของผู้ใช้
     * 
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     */

    public function getMyBadges(Request $request)
    {
        return (new GetMyBadges())->getMyBadges($request);
    }
}
