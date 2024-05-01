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
        LOG::channel('debug')->info('Get all events', ['request' => $request->all()]);

        // ============ Query ============
        $query = [];
        
        // name
        if ($request->has('name')) {
            $query[] = ['event_name', 'like', '%' . $request->name . '%'];
        }


        // pagiantion
        $events = Event::where('event_status', Event::EVENT_STATUS_PUBLISHED)
        ->whereNotIn('event_phase', [Event::EVENT_PHASE_REVIEWING, Event::EVENT_PHASE_COMPLETED])
        ->where($query)
        ->paginate(10);
        $pagination = $events->toArray();

        $pagination['data'] = [];
        
        if ($events) {
            return response()->json([
                'message' => 'Events found',
                'events' => array_map(function ($event) {
                    return new EventCardResource($event);
                }, $events->all()),
                'pagination' => $pagination,
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Events not found'
            ], 404);
        }
    }
    
}
