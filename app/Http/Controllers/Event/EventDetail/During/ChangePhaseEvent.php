<?php

namespace App\Http\Controllers\Event\EventDetail\During;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ChangePhaseEvent extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        //TODO : Add policy
        //$this->authorize('changePhase', $event);

        $event->event_phase = $request->phase;
        $event->save();

        toastr()->addSuccess(__('event.event_phase_changed_successfully'));
        return back();
    }
}
