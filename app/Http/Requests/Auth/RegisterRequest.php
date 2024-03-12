<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Log;

class RegisterRequest extends FormRequest
{
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
            'first_name' => ['required', 'string', 'max:50', 'min:3'],
            'last_name' => ['required', 'string', 'max:50', 'min:3'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50', 'unique:users'],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
                'confirmed'
            ],

            'mobile_number' => ['required', 'string', 'max:15', 'unique:users'],
            'date_of_birth' => ['required', 'date', 'before:today'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
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
     * Get the validation error messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'กรุณากรอกชื่อ',
            'last_name.required' => 'กรุณากรอกนามสกุล',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.unique' => 'อีเมลนี้ถูกใช้งานแล้ว',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร',
            'password.confirmed' => 'รหัสผ่านไม่ตรงกัน',
            'password.regex' => 'รหัสผ่านต้องประกอบด้วยตัวอักษรภาษาอังกฤษตัวพิมพ์เล็ก ตัวพิมพ์ใหญ่ ตัวเลข และอักขระพิเศษอย่างน้อย 1 ตัว',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'email.max' => 'อีเมลต้องมีความยาวไม่เกิน 50 ตัวอักษร',
            'first_name.max' => 'ชื่อต้องมีความยาวไม่เกิน 100 ตัวอักษร',
            'mobile_number.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'date_of_birth.required' => 'กรุณาเลือกวันเกิด',
            'date_of_birth.before' => 'วันเกิดต้องเป็นวันที่อยู่ในอดีต',
            'gender.required' => 'กรุณาเลือกเพศ',
            'address.required' => 'กรุณากรอกที่อยู่',
            'province.required' => 'กรุณาเลือกจังหวัด',
            'district.required' => 'กรุณาเลือกอำเภอ',
            'city.required' => 'กรุณาเลือกตำบล',
            'zipcode.required' => 'กรุณากรอกรหัสไปรษณีย์',
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
        toastr()->addError('You have failed to register!');
        parent::failedValidation($validator);
    }
}
