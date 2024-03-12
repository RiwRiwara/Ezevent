<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Traits\AdditionalValidationTrait;
use Illuminate\Support\Facades\Log;


class DateTimeUpdateController extends Controller
{
    use AdditionalValidationTrait;
    
    public function __invoke(Request $request, $event_id)
    {
        $errors = $this->eventDateTimeValidation($request);
        if (!empty($errors)) {
            $errorMessage = json_encode(reset($errors));
            toastr()->AddError($errorMessage, 'Event update failed');
            return redirect()->back()->withErrors($errors)->withInput()->withFragment('event_setting');
        }

        $event = Event::where('event_id', $event_id)->first();

        $request->merge([
            'is_specific_date' => $request->event_time === 'specific',
            'is_online' => $request->venue === 'online',
            'date_start' => date('Y-m-d', strtotime($request->date_start)),
            'date_end' => date('Y-m-d', strtotime($request->date_end)),
        ]);

        $event->update($request->all());
        toastr()->AddSuccess('Event date and time updated successfully');
        return redirect()->back()->withFragment('event_setting');

    }
}
