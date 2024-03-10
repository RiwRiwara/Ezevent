<?php

namespace App\Http\Controllers\Event\CreateEvent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\PreCreateRequest;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class StoreEventController extends Controller
{
    public function __invoke(PreCreateRequest $request)
    {
        $request->authorize();

        $this->addittionValidation($request);

        $types = $this->prepareTypesToString($request->all());
        log::channel('debug')->info("all request", $request->all());

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

    private function addittionValidation($request)
    {
        // Validate at least 1 type is required
        $required = 0;
        foreach ($request->all() as $key => $value) {
            if (Str::startsWith($key, 'type_')) {
                $required++;
            }
        }
        if ($required < 1) {
            toastr()->AddError('At least 1 type is required');
            throw new ValidationException(Validator::make([], []));
        }

        // Validate date and time if event time is specific
        if ($request->event_time === 'specific') {
            $validator = Validator::make($request->all(), [
                'date_start' => 'required|date',
                'date_end' => 'required|date|after_or_equal:date_start',
                'time_start' => 'required|date_format:H:i',
                'time_end' => 'required|date_format:H:i|after:time_start',
            ], [
                'date_start.required' => 'Start date is required',
                'date_start.date' => 'Start date must be a valid date',
                'date_end.required' => 'End date is required',
                'date_end.date' => 'End date must be a valid date',
                'date_end.after_or_equal' => 'End date must be after or equal to start date',
                'time_start.required' => 'Start time is required',
                'time_start.date_format' => 'Start time must be a valid time',
                'time_end.required' => 'End time is required',
                'time_end.date_format' => 'End time must be a valid time',
                'time_end.after' => 'End time must be after start time',

            ]);

            if ($validator->fails()) {
                toastr()->AddError($validator->errors()->first());
                throw new ValidationException($validator);
            }
        }
        // Validate location if venue is venue
        if ($request->venue === 'venue') {
            $validator = Validator::make($request->all(), [
                'event_location' => 'required|string',
                'placename' => 'required|string',
                'district' => 'required|string',
                'province' => 'required|string',
                'travel_info' => 'required|string',
                'room' => 'required|string',
                'lat' => 'required|string',
                'lng' => 'required|string',
            ], [
                'event_location.required' => 'Event location is required',
                'event_location.string' => 'Event location must be a string',
                'placename.required' => 'Placename is required',
                'placename.string' => 'Placename must be a string',
                'district.required' => 'District is required',
                'district.string' => 'District must be a string',
                'province.required' => 'Province is required',
                'province.string' => 'Province must be a string',
                'travel_info.required' => 'Travel info is required',
                'travel_info.string' => 'Travel info must be a string',
                'room.required' => 'Room is required',
                'room.string' => 'Room must be a string',
                'lat.required' => 'Latitude is required',
                'lat.string' => 'Latitude must be a string',
                'lng.required' => 'Longitude is required',
                'lng.string' => 'Longitude must be a string',
            ]);

            if ($validator->fails()) {
                toastr()->AddError($validator->errors()->first());
                throw new ValidationException($validator);
            }
        }
    }
}
