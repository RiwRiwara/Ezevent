<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class AdminControllerApi extends Controller
{
    /**
     * Get all users
     * 
     * Retrieves all users from the database
     * 
     * ดึงข้อมูลผู้ใช้ทั้งหมดจากฐานข้อมูล
     * 
     * 
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function getAllUsers()
    {
        return (new GetAllUser())->getAllUser();
    }
}
