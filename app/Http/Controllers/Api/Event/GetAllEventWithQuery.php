<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Resources\Api\EventCardResource;
use Illuminate\Support\Facades\Log;

class GetAllEventWithQuery extends Controller
{

    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getEventAll($request);
    }



    public function getEventAll(Request $request)
    {
        // Build query
        $query = Event::where('event_status', Event::EVENT_STATUS_PUBLISHED)
            ->whereNotIn('event_phase', [Event::EVENT_PHASE_REVIEWING, Event::EVENT_PHASE_COMPLETED]);

        // Filter by event name
        if ($request->has('name')) {
            $query->where('event_name', 'like', '%' . $request->name . '%');
        }

        // Filter by date_start
        if ($request->has('date_start')) {
            $query->whereDate('date_start', '<=', $request->date_start)
                ->whereDate('date_end', '>=', $request->date_start);
        }

        // Filter by Today
        if ($request->has('today')) {
            $today = date('Y-m-d');
            $query->whereDate('date_start', '<=', $today)
                ->whereDate('date_end', '>=', $today);
        }

        // Filter by tomorrow
        if ($request->has('tomorrow')) {
            $tomorrow = date('Y-m-d', strtotime('+1 day'));
            $query->whereDate('date_start', '<=', $tomorrow)
                ->whereDate('date_end', '>=', $tomorrow);
        }

        // Filter by this week
        if ($request->has('this_week')) {
            $today = date('Y-m-d');
            $endOfWeek = date('Y-m-d', strtotime('next sunday'));
            $query->whereDate('date_start', '>=', $today)
                ->whereDate('date_end', '<=', $endOfWeek);
        }

        // Filter by this month
        if ($request->has('this_month')) {
            $today = date('Y-m-d');
            $endOfMonth = date('Y-m-t');
            $query->whereDate('date_start', '>=', $today)
                ->whereDate('date_end', '<=', $endOfMonth);
        }

        // Filter by categories
        if ($request->has('categories')) {
            $query->whereJsonContains('categories', $request->categories);
            
        }

        // Filter by badges [?badges=1,2,3,4]
        if ($request->has('badges')) {
            //TODO: 'Filter by badges';
        }

        // Paginate results ====================
        $events = $query->paginate(10);
        $pagination = $events->toArray();

        $pagination['data'] = [];

        if ($events->isNotEmpty()) {
            return response()->json([
                'message' => 'Events found',
                'events' => EventCardResource::collection($events),
                'pagination' => $pagination,
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'message' => 'Events not found'
            ], 404);
        }
    }
}
