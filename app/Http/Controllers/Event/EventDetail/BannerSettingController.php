<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class BannerSettingController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();

        $event->banner_text_bg = $request->text_background_color;
        $event->banner_text_color = $request->banner_text_color;
        $event->save();

        toastr()->AddSuccess('Banner settings updated successfully');

        return redirect()->back()->withFragment('appearance');
        
        
    }
}
