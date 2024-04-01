<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

trait AdditionalValidationTrait
{
    public function eventDateTimeValidation($request)
    {
        $errors = [];

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
                $errors = $validator->errors()->toArray();
            }
        }

        return $errors;
    }

    public function eventTypeValidation($request)
    {
        $errors = [];

        // Validate at least 1 type is required
        $required = 0;
        foreach ($request->all() as $key => $value) {
            if (Str::startsWith($key, 'type_')) {
                $required++;
            }
        }

        if ($required < 1) {
            $errors['type'] = 'At least 1 type is required';
        }

        return $errors;
    }

    public function eventLocationValidation($request)
    {
        $errors = [];

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
                $errors = $validator->errors()->toArray();
            }
        }

        return $errors;
    }

    public function eventContactEmailValidation($request)
    {
        $errors = [];

        // Validate contact email if venue is online
        if ($request->venue === 'online') {
            $validator = Validator::make($request->all(), [
                'contact_email' => 'required|email|max:50',
            ], [
                'contact_email.required' => 'Contact email is required',
                'contact_email.email' => 'Contact email must be a valid email',
                'contact_email.max' => 'Contact email must not exceed 50 characters',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
            }
        }

        return $errors;
    }

    public function eventContactPhoneValidation($request)
    {
        $errors = [];

        // Validate contact phone if venue is online
        if ($request->venue === 'online') {
            $validator = Validator::make($request->all(), [
                'contact_phone' => 'required|string:max:15',
            ], [
                'contact_phone.required' => 'Contact phone is required',
                'contact_phone.string' => 'Contact phone must be a string',
                'contact_phone.max' => 'Contact phone must not exceed 15 characters',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
            }
        }

        return $errors;
    }
    
    public function eventNameValidation($request) {
        $errors = [];

        // Validate event name and 
        $validator = Validator::make($request->all(), [
            'event_name' => 'required|string|max:144',
        ], [
            'event_name.required' => 'Event name is required',
            'event_name.string' => 'Event name must be a string',
            'event_name.max' => 'Event name must not exceed 144 characters',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
        }

        return $errors;
    }


    
}
