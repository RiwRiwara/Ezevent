<?php

namespace App\Http\Controllers\Event\EventDetail\Participant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventParticipantListController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('view', $event);


        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('event-list')],
                ['label' => $event->event_name],
            ],
            'default_event_img' => config('azure.default_img.event_banner'),
        ];
        return view('event.event-detail-participant.event-detail-participant', compact('page_data', 'event'));
    }
}
