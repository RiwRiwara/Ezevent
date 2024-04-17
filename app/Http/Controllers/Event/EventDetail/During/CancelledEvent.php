<?php

namespace App\Http\Controllers\Event\EventDetail\During;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class CancelledEvent extends Controller
{

    public function __invoke(Request $request, string $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        //TODO : Add policy
        //$this->authorize('cancelled', $event);

        $event->event_status = Event::EVENT_STATUS_CANCELLED;
        $event->save();

        toastr()->addSuccess(__('event.event_cancelled_successfully'));
        return back();
    }
}
