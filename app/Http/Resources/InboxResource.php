<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InboxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'inbox_id' => $this->inbox_id,
            'status' => $this->status,
            'inbox_type' => $this->inbox_type,
            'subject' => $this->subject,
            'body' => $this->body,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'event_id' => $this->event_id,
            'user_recieve_id' => $this->user_recieve_id,
        ];
    }
}
