<?php

namespace App\Http\Controllers\Event\EventDetail\During;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class PublishEvent extends Controller
{

    public function __invoke(Request $request, string $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        //TODO : Add policy
        //$this->authorize('publish', $event);

        $event->event_status = Event::EVENT_STATUS_PUBLISHED;
        $event->event_phase = Event::EVENT_PHASE_UPCOMING;
        $event->save();

        toastr()->addSuccess(__('event.event_published'));
        return back();
    }
}
