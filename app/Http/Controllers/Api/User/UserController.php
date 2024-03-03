<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;


class UserController extends Controller
{

    /**
     * Get user by user_id [T]
     * 
     * Retrieves a specific user by their user_id and returns a user object.
     * 
     * ดึงข้อมูลผู้ใช้เฉพาะด้วย user_id และส่งคืนอ็อบเจ็กต์ผู้ใช้
     *
     * @param string $user_id The ID of the user to retrieve.
     *
     * @return UserResource A resource object containing the user's data.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function getUserByID(string $user_id)
    {
        return (new getUserByIdController())->getUserByID($user_id);
    }

    /**
     * Update user by fields name [T]
     * 
     * Updates a user's information by their user_id and returns the updated user object.
     * 
     * อัปเดตข้อมูลผู้ใช้ และส่งคืนอ็อบเจ็กต์ผู้ใช้ที่อัปเดตแล้ว
     * 
     * @param \Illuminate\Http\Request $request The incoming request object.
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateByFieldsName(Request $request)
    {
        return (new UpdateByFieldsName())->updateByFieldsName($request);
    }

    /**
     * Upload user profile [T]
     * 
     * Uploads a user's profile image to the server and returns the updated user object.
     * 
     * อัปโหลดรูปภาพโปรไฟล์ของผู้ใช้ไปยังเซิร์ฟเวอร์และส่งคืนอ็อบเจ็กต์ผู้ใช้ที่อัปเดตแล้ว
     * 
     * @param \Illuminate\Http\Request $request The incoming request object.
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadUserProfile(Request $request)
    {
        return (new UploadUserProfileController())->uploadUserProfile($request);
    }
}
