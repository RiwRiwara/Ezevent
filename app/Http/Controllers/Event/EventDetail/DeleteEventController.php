<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class DeleteEventController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('delete', $event);

        $confirm_name = $request->confirm_name;

        if ($confirm_name != $event->event_name) {
            toastr()->AddError('Event name does not match');
            return redirect()->back()->withFragment('event_setting');
        }

        $event->is_deleted = true;
        $event->deleted_by = auth()->user()->user_id;
        $event->save();
        toastr()->AddSuccess('Event deleted successfully');
        return redirect()->route('event-list');
    }
}
