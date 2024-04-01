<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ParticipantApplicationRequest extends FormRequest
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
        return [
            // Event ID is required and must exist in the events table
            'event_id' => ['required', 'string', 'exists:events,event_id'],

            // form_id is a string
            'form_id' => ['nullable', 'string'],

            // Type is required and must be a string and enum 
            'type' => ['required', 'string', 'in:Participant,Staff'],
            
            
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'event_id.required' => 'The event_id field is required.',
            'event_id.exists' => 'The event does not exist.',
            'user_id.exists' => 'The user does not exist.',

            'type.required' => 'The type field is required.',
            'type.in' => 'The type field must be one of the following types: Participant, Staff',

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
    }
}
