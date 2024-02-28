<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'role' => $this->role,
            'mobile_number' => $this->mobile_number,
            'short_bio' => $this->short_bio,
            'gender' => $this->gender,
            'email_verified_at' => $this->email_verified_at,
            'personality' => $this->personality,
            'date_of_birth' => $this->date_of_birth,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'address' => $this->address,
            'province' => $this->province,
            'district' => $this->district,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'facebook' => $this->facebook,
            'line' => $this->line,
            'instagram' => $this->instagram,
            'profile_img' => $this->profile_img,
            'sub_img_1' => $this->sub_img_1,
            'sub_img_2' => $this->sub_img_2,
            'sub_img_3' => $this->sub_img_3
        ];
    }
}
