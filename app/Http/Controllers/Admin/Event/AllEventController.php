<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event; // Assuming Event model is used

class AllEventController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->input('search_string');
        
        // Retrieve all events instead of user's active events
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

        return view('admin.admin_dashboard', compact('events_data'));
    }
}