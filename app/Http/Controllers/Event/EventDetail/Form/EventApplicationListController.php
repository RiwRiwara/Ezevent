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

        $timeRange = $request->input('time_range', 'all');
        $role = $request->input('role', 'all');
        $status = $request->input('status', 'all');
        $nameSearch = $request->input('table-search', '');
        $eventApplicationsQuery = $event->eventApplications()->with('user');

        // Filter data
        $filters = [
            'time_range' => [
                'selected' => $timeRange,
                'data' => [
                    'last_day' => 'Last Day',
                    'last_7_days' => 'Last 7 Days',
                    'last_30_days' => 'Last 30 Days',
                    'last_month' => 'Last Month',
                    'all' => 'All Time',
                ],
            ],
            'role' => [
                'selected' => $role,
                'data' => [
                    'all' => 'All Roles',
                    'Participant' => 'Participant',
                    'Staff' => 'Staff',
                ],
            ],
            'status' => [
                'selected' => $status,
                'data' => [
                    'all' => 'All Statuses',
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ],
            ],
            'name_search' => $nameSearch,
        ];

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

        if ($status !== 'all') {
            $eventApplicationsQuery->where('status', $status);
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

        return view('event.event-detail-form.event-detail-form', compact('page_data', 'event', 'eventApplications', 'timeRange', 'eventApplicationsDataArray', 'filters'));
    }
}
