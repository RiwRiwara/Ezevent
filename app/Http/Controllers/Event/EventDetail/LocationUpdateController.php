<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Traits\AdditionalValidationTrait;

class LocationUpdateController extends Controller
{
    use AdditionalValidationTrait;

    public function __invoke(Request $request, $event_id)
    {
        $errors = $this->eventLocationValidation($request);
        if (!empty($errors)) {
            $errorMessage = json_encode(reset($errors));
            toastr()->AddError($errorMessage, 'Event update failed');
            return redirect()->back()->withErrors($errors)->withInput()->withFragment('event_setting');
        }
        $event = Event::where('event_id', $event_id)->first();
        $event->update($request->all());

        toastr()->AddSuccess('Event location updated successfully');
        return redirect()->back()->withFragment('event_setting');


    }
}
