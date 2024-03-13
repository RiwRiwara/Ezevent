<?php

namespace App\Http\Controllers\Event\EventList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventListController extends Controller
{
    public function __invoke(Request $request)
    {

        $my_events = $request->user()->activeEvents()->paginate(10);

        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('create-event')],
                ['label' => 'Create Event'],
            ],
            'my_events' => $my_events,
        ];
        
        
        return view('event.event-list', compact('page_data'));
    }
}
