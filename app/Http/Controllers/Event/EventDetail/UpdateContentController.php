<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Event;

class UpdateContentController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $this->authorize('update', $event);

        $sanitizedContent = $request->input('content_input');

        $event->content = $sanitizedContent;
        $event->save();

        Log::channel('debug')->info('Event Content Updated', [
            'event_id' => $event_id,
            'content' => $sanitizedContent,
        ]);

        toastr()->addSuccess(__('event.content_updated'));
        return back()->withFragment('appearance');
    }


    private function htmlString(Request $request)
    {
    }
}
