<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
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
            'application_date' => $this->application_date,
            'approved_date' => $this->approved_date,
            
        ];
    }
}
