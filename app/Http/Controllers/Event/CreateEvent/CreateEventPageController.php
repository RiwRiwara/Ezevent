<?php

namespace App\Http\Controllers\Event\CreateEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateEventPageController extends Controller
{
    public function __invoke(Request $request)
    {

        $page_data = [
            'breadcrumbItems' => [
                ['label' => __('event.event'), 'url' => route('event-list')],
                ['label' => __('event.create_event')],
            ],
            'event_types' => \App\Models\EventType::all(),
            'badge_types' => \App\Models\Badge::all(),
        ];
        
        return view('event.create-event', compact('page_data'),);
    }


}
