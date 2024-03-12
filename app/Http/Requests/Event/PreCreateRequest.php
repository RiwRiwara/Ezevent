<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;


class PreCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'event_name' => 'required|string|max:144',
            'event_time' => 'required|string|in:announce_after,specific',
            'venue' => 'required|string|in:venue,online',

        ];
        if ($this->isFromLivewire()) {
            $logMessage = json_decode(request()->toArray()['components'][0]['snapshot'], true);
            request()->merge([
                $logMessage['data']['fieldName'] => $logMessage['data']['newValue']
            ]);
            foreach ($rules as $key => $value) {
                if ($key !== $logMessage['data']['fieldName']) {
                    unset($rules[$key]);
                }
            }
        }
        return $rules;
    }

    public function isFromLivewire(): bool
    {
        return request()->has('components');
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'event_name.required' => 'Event name is required',
            'event_name.string' => 'Event name must be a string',
            'event_name.max' => 'Event name must not exceed 144 characters',
            'event_time.required' => 'Event time is required',
            'event_time.string' => 'Event time must be a string',
            'event_time.in' => 'Event time must be either announce_after or specific',
            'venue.required' => 'Venue is required',
            'venue.string' => 'Venue must be a string',
            'venue.in' => 'Venue must be either venue or online',
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            $response = response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);

            throw new \Illuminate\Validation\ValidationException($validator, $response);
        }
        toastr()->AddError($validator->errors()->first());
        parent::failedValidation($validator);
    }
}
