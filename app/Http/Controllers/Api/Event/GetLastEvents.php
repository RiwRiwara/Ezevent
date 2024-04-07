<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\Api\LastestEventResource;




class GetLastEvents extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getLastEvents($request);
    }

    public function getLastEvents()
    {
        $events = Event::orderBy('created_at', 'desc')->take(5)->get();


        Log::channel('debug')->info('Events found', ['events' => $events]);

        if ($events) {
            return response()->json([
                'message' => 'Events found',
                'events' => array_map(function ($event) {
                    return new LastestEventResource($event);
                }, $events->all()),
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Events not found'
            ], 404);
        }
    }
}
