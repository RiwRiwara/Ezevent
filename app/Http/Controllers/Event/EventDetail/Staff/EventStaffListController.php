<?php

namespace App\Http\Controllers\Event\EventDetail\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventStaffListController extends Controller
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
        return view('event.event-detail-staff.event-detail-staff', compact('page_data', 'event'));
    }
}
