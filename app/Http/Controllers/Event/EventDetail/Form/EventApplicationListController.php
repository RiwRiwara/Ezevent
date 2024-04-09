<?php

namespace App\Http\Controllers\Event\EventDetail\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;

class EventApplicationListController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('view', $event);

        $timeRange = $request->input('time_range', 'last_7_days');
        $role = $request->input('role', 'all');
        $nameSearch = $request->input('table-search', '');
        $eventApplicationsQuery = $event->eventApplications()->with('user');

        switch ($timeRange) {
            case 'last_day':
                $eventApplicationsQuery->whereDate('created_at', '>=', now()->subDay());
                break;
            case 'last_7_days':
                $eventApplicationsQuery->whereDate('created_at', '>=', now()->subDays(7));
                break;
            case 'last_30_days':
                $eventApplicationsQuery->whereDate('created_at', '>=', now()->subDays(30));
                break;
            case 'last_month':
                $eventApplicationsQuery->whereMonth('created_at', '=', now()->subMonth()->month);
                break;
            default:
                break;
        }

        if ($role !== 'all') {
            $eventApplicationsQuery->where('type', $role);
        }

        $eventApplicationsQuery->whereHas('user', function ($query) use ($nameSearch) {
            $query->where(function ($query) use ($nameSearch) {
                $query->where('first_name', 'like', "%$nameSearch%")
                    ->orWhere('last_name', 'like', "%$nameSearch%")
                    ->orWhere('email', 'like', "%$nameSearch%");
            });
        });


        $eventApplications = $eventApplicationsQuery->paginate(10);

        $eventApplicationsDataArray = $eventApplications->toArray();

        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('event-list')],
                ['label' => $event->event_name],
            ],
        ];

        return view('event.event-detail-form.event-detail-form', compact('page_data', 'event', 'eventApplications', 'timeRange', 'eventApplicationsDataArray'));
    }
}
