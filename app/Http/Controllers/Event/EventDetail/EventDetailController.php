<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventDetailController extends Controller
{
    const TEMPLATE_PAGE = 'event.event-detail';

    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('view', $event);

        $event_types = $this->prepate_type_data($event);
        $event->event_types = $event_types;

        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('event-list')],
                ['label' => $event->event_name],
            ],
            'event_types' => \App\Models\EventType::all(),
            'badge_types' => \App\Models\Badge::all(),
            'default_event_img' => config('azure.default_img.event_banner'),
        ];

        return view(EventDetailController::TEMPLATE_PAGE, compact('page_data', 'event'));
    }


    private function prepate_type_data($event)
    {
        $event_types = $event->categories;
        $event_types = explode(',', $event_types);
        
        $event_types = collect($event_types)->map(function ($event_type) {
            return 'type_' . $event_type;
        });
        
        return $event_types;
    }
    
}
