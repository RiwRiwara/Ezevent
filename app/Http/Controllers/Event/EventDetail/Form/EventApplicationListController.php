<?php

namespace App\Http\Controllers\Event\EventDetail\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventApplicationListController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('view', $event);

        $eventApplications = $event->eventApplications()->with('user')->get();

        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('event-list')],
                ['label' => $event->event_name],
            ],
        ];


        return view('event.event-detail-form.event-detail-form', compact('page_data', 'event', 'eventApplications'));
    }
}
