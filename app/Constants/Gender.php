<?php

namespace App\Constants;

class Gender
{

    const GENDER = [
        [
            "id" => 1,
            "name_th" => "ชาย",
            "name_en" => "Male",
        ],
        [
            "id" => 2,
            "name_th" => "หญิง",
            'name_en' => "Female",
        ],
        [
            "id" => 3,
            "name_th" => "LGBTQ+",
            'name_en' => "LGBTQ+",
        ],
        [
            "id" => 4,
            "name_th" => "ไม่ระบุ",
            'name_en' => "Unspecified",
        ],



    ];

    public static function gender()
    {
        return self::GENDER;
    }

    public static function getGenderById($id)
    {
        foreach (self::GENDER as $gender) {
            if ($gender['id'] == $id) {
                return $gender;
            }
        }
        return null; 
    }
}
