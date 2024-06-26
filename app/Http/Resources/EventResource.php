<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class EventResource extends JsonResource
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
            'categories'=> $this->categories,
            'contact_email' => $this->contact_email,
            'contact_phone' => $this->contact_phone,
            'event_time' => $this->event_time,
            'venue' => $this->venue,
            'event_location' => $this->event_location,
            'placename' => $this->placename,
            'district' => $this->district,
            'province' => $this->province,
            'travel_info' => $this->travel_info,
            'room' => $this->room,
            'lat' => $this->lat,
            'lng'   => $this->lng,
            'event_phase' => $this->event_phase,
            'event_status' => $this->event_status,
            'is_specific_date' => $this->is_specific_date,
            'is_online' => $this->is_online,
            'organizer_id' => $this->organizer_id,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'line' => $this->line,
            'website' => $this->website,
            'age_require' => $this->age_require,
            'limit_participant' => $this->limit_participant,
            'number_participant' => $this->getSummary()['count_participants'],
            'limit_staff' => $this->limit_staff,
            'number_staff' => $this->getSummary()['count_staff'],
    
            'content' => $this->content,
            'banner_text_bg' => $this->banner_text_bg,
            'banner_text_color' => $this->banner_text_color,
            'content_theme' => $this->content_theme,
            'banner_image' => $this->banner_image,
            'thumbnail' => $this->thumbnail,

            'isJoined' => $this->isMeJoinEvent(),


            'status_color' => $this->getStatusColor(),
            'date_start' => $this->getDateStart(),
            'date_end' => $this->getDateEnd(),
            'time_start' => $this->getTimeStart(),
            'time_end' => $this->getTimeEnd(),
            'getThumbnail' => $this->getThumbnail(),
            'getBannerImage' => $this->getBannerImage(),
            'getCategoriesForShow' => $this->getCategoriesForShow(),
            'getDateShow' => "Date: " .$this->getDateStart() . " - " . $this->getDateEnd(),
            'getTimeShow' => "Time: " .$this->getTimeStart() . " - " . $this->getTimeEnd(),
            'organizer' => new UserResource($this->getOrganizer()),
    
        ];
    }
}
