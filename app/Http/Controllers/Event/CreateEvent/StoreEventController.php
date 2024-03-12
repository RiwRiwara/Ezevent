<?php

namespace App\Http\Controllers\Event\CreateEvent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\PreCreateRequest;
use App\Models\Event;
use Illuminate\Support\Str;
use App\Traits\AdditionalValidationTrait;
use Illuminate\Support\Facades\Log;


class StoreEventController extends Controller
{
    use AdditionalValidationTrait;

    public function __invoke(PreCreateRequest $request)
    {
        $request->authorize();

        $errors = [];
        $errors += $this->eventTypeValidation($request);
        $errors += $this->eventDateTimeValidation($request);
        $errors += $this->eventLocationValidation($request);

        if (!empty($errors)) {

            $errorMessage = json_encode(reset($errors));
            toastr()->AddError($errorMessage, 'Event creation failed');
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $types = $this->prepareTypesToString($request->all());

        $request->merge([
            'event_id' => uniqid('event_'),
            'organizer_id' => auth()->user()->user_id,
            'categories' => $types,
            'is_specific_date' => $request->event_time === 'specific',
            'is_online' => $request->venue === 'online',
            'event_phase' => Event::EVENT_PHASE_INITIAL,
            'event_status' => Event::EVENT_STATUS_DRAFT,
            'date_start' => date('Y-m-d', strtotime($request->date_start)),
            'date_end' => date('Y-m-d', strtotime($request->date_end)),

        ]);

        Event::create($request->all());

        toastr()->AddSuccess('Event created successfully');
        return redirect()->route('event-list');
    }


    private function prepareTypesToString($request): String
    {
        $types = '';
        foreach ($request as $key => $value) {
            if (Str::startsWith($key, 'type_')) {
                $types .= $value . ',';
            }
        }
        return rtrim($types, ',');
    }
}
