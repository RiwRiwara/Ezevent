<?php

namespace App\Http\Resources\Api\Event;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MyApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'application_id' => $this->application_id,
            'event_id' => $this->event_id,
            'user_id' => $this->user_id,
            'form_id' => $this->form_id,
            'type' => $this->type,
            'status' => $this->status,
            'message' => $this->message,
            'approved_date' => $this->approved_date,
            'event_name' => $this->event->event_name,
            'event_date' => $this->event->event_date,
            'event_time' => $this->event->event_time,
            'event_location' => $this->event->event_location,
            'event_description' => $this->event->event_description,
            'event_image' => $this->event->event_image,
            'event_status' => $this->event->event_status,
            'application_date' => $this->application_date,
            'application_status' => $this->application_status,
            'application_remarks' => $this->application_remarks,
            'event' => EventResource::make($this->event),

        ];
    }
}
