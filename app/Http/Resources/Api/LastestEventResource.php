<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LastestEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'event_id' => $this->event_id,
            'event_name' => $this->event_name,
            'getBannerImage' => $this->getBannerImage(),
        ];
    }
}
