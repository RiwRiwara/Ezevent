<?php

namespace App\Http\Controllers\Event\CreateEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateEventController extends Controller
{
    public function __invoke(Request $request)
    {
        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('create-event')],
                ['label' => 'Create Eevnt'],
            ],
            'event_types' => \App\Models\EventType::all(),
            'badge_types' => \App\Models\Badge::all(),
        ];
        return view('logged_in.create_event', compact('page_data'),);
    }
}
