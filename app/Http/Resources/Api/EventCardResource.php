<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventCardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'event_id' => $this->event_id,
            'event_name' => $this->event_name,
            'getBannerImage' => $this->getBannerImage(),
            'venue' => $this->venue,
            'event_location' => $this->event_location,
            'is_specific_date' => $this->is_specific_date,
            'is_online' => $this->is_online,

            'isJoined' => $this->isMeJoinEvent(),

            
            'status_color' => $this->getStatusColor(),
            'date_start' => $this->getDateStart(),
            'date_end' => $this->getDateEnd(),
        ];
    }
}
