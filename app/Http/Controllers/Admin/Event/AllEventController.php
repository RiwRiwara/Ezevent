<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class AllEventController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->input('search_string');
        
        $all_events = Event::query()
            ->when($search, function ($query, $search) {
                return $query->where('event_name', 'like', "%$search%");
            })
            ->paginate(10);

        $events_data = [
            'breadcrumbItems' => [
                ['label' => 'Events'],
            ],
            'all_events' => $all_events,
        ];

        return view('admin.events-dashboard', compact('events_data'));
    }
}