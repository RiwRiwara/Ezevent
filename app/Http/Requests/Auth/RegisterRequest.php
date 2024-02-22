<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50', 'unique:users'],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[0-9]).*$/',
                'confirmed'
            ],

            'mobile_number' => ['required', 'string', 'max:15', 'unique:users'],
            'date_birth' => ['required', 'date', 'before:today'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zipcode' => ['required', 'string'],

        ];
    }



    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     */
    protected function failedValidation($validator)
    {

        $this->redirect = url()->previous();
        flash()->addError('เกิดข้อผิดพลาดในการกรอกข้อมูล กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน');
        foreach ($validator->errors()->all() as $error) {
            flash()->addError($error);
        }
        parent::failedValidation($validator);
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
            'date_birth.required' => 'กรุณาเลือกวันเกิด',
            'date_birth.before' => 'วันเกิดต้องเป็นวันที่อยู่ในอดีต',
            'gender.required' => 'กรุณาเลือกเพศ',
            'address.required' => 'กรุณากรอกที่อยู่',
            'province.required' => 'กรุณาเลือกจังหวัด',
            'district.required' => 'กรุณาเลือกอำเภอ',
            'city.required' => 'กรุณาเลือกตำบล',
            'zipcode.required' => 'กรุณากรอกรหัสไปรษณีย์',
        ];
    }
}
