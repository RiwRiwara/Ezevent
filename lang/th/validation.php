<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    // Thai lang

    'accepted' => 'คุณต้องยอมรับ :attribute.',
    'active_url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง.',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date.',
    'after_or_equal' => ':attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date.',
    'alpha' => ':attribute สามารถมีเฉพาะตัวอักษรเท่านั้น.',
    'alpha_dash' => ':attribute สามารถมีเฉพาะตัวอักษร, ตัวเลข, ขีดล่าง และ ขีดกลางเท่านั้น.',
    'alpha_num' => ':attribute สามารถมีเฉพาะตัวอักษรและตัวเลขเท่านั้น.',
    'array' => ':attribute ต้องเป็นอาร์เรย์.',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date.',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date.',
    'between' => [
        'array' => ':attribute ต้องมีระหว่าง :min และ :max รายการ.',
        'file' => ':attribute ต้องมีขนาดระหว่าง :min และ :max กิโลไบต์.',
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max.',
        'string' => ':attribute ต้องมีความยาวระหว่าง :min และ :max ตัวอักษร.',
    ],
    'boolean' => 'ฟิลด์ :attribute ต้องเป็น true หรือ false เท่านั้น.',
    'confirmed' => ':attribute ยืนยันไม่ตรงกัน.',
    'date' => ':attribute ไม่ใช่รูปแบบวันที่ที่ถูกต้อง.',
    'date_equals' => ':attribute ต้องเป็นวันที่เท่ากับ :date.',
    'date_format' => ':attribute ไม่ตรงกับรูปแบบ :format.',
    'different' => ':attribute และ :other ต้องไม่เหมือนกัน.',
    'digits' => ':attribute ต้องเป็น :digits หลัก.',
    'digits_between' => ':attribute ต้องอยู่ระหว่าง :min และ :max หลัก.',
    'dimensions' => ':attribute มีขนาดรูปภาพไม่ถูกต้อง.',
    'distinct' => ':attribute มีค่าที่ซ้ำกัน.',
    'email' => ':attribute ต้องเป็นอีเมลที่ถูกต้อง.',
    'ends_with' => ':attribute ต้องลงท้ายด้วยค่าใดค่าหนึ่ง: :values',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง.',
    'file' => ':attribute ต้องเป็นไฟล์.',
    'filled' => ':attribute จำเป็นต้องมีค่า.',
    'gt' => [
        'array' => ':attribute ต้องมีรายการมากกว่า :value.',
        'file' => ':attribute ต้องมีขนาดมากกว่า :value กิโลไบต์.',
        'numeric' => ':attribute ต้องมีค่ามากกว่า :value.',
        'string' => ':attribute ต้องมีความยาวมากกว่า :value ตัวอักษร.',
    ],
    'gte' => [
        'array' => ':attribute ต้องมีรายการ :value หรือมากกว่า.',
        'file' => ':attribute ต้องมีขนาด :value กิโลไบต์ หรือมากกว่า.',
        'numeric' => ':attribute ต้องมีค่า :value หรือมากกว่า.',
        'string' => ':attribute ต้องมีความยาว :value ตัวอักษร หรือมากกว่า.',
    ],
    'image' => ':attribute ต้องเป็นรูปภาพ.',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง.',
    'in_array' => ':attribute ไม่มีอยู่ใน :other.',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม.',
    'ip' => ':attribute ต้องเป็น IP address ที่ถูกต้อง.',
    'ipv4' => ':attribute ต้องเป็น IPv4 address ที่ถูกต้อง.',
    'ipv6' => ':attribute ต้องเป็น IPv6 address ที่ถูกต้อง.',
    'json' => ':attribute ต้องเป็น JSON string ที่ถูกต้อง.',
    'lt' => [
        'array' => ':attribute ต้องมีรายการน้อยกว่า :value.',
        'file' => ':attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์.',
        'numeric' => ':attribute ต้องมีค่าน้อยกว่า :value.',
        'string' => ':attribute ต้องมีความยาวน้อยกว่า :value ตัวอักษร.',
    ],
    'lte' => [
        'array' => ':attribute ต้องมีรายการ :value หรือน้อยกว่า.',
        'file' => ':attribute ต้องมีขนาด :value กิโลไบต์ หรือน้อยกว่า.',
        'numeric' => ':attribute ต้องมีค่า :value หรือน้อยกว่า.',
        'string' => ':attribute ต้องมีความยาว :value ตัวอักษร หรือน้อยกว่า.',
    ],
    'max' => [
        'array' => ':attribute อาจมีรายการไม่เกิน :max รายการ.',
        'file' => ':attribute อาจมีขนาดไม่เกิน :max กิโลไบต์.',
        'numeric' => ':attribute อาจมีค่าไม่เกิน :max.',
        'string' => ':attribute อาจมีความยาวไม่เกิน :max ตัวอักษร.',
    ],
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท: :values.',
    'mimetypes' => ':attribute ต้องเป็นไฟล์ประเภท: :values.',
    'min' => [
        'array' => ':attribute ต้องมีรายการอย่างน้อย :min รายการ.',
        'file' => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์.',
        'numeric' => ':attribute ต้องมีค่าอย่างน้อย :min.',
        'string' => ':attribute ต้องมีความยาวอย่างน้อย :min ตัวอักษร.',
    ],
    'multiple_of' => ':attribute ต้องเป็นตัวเลขที่เป็นเท่าคูณของ :value',
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง.',
    'not_regex' => ':attribute มีรูปแบบที่ไม่ถูกต้อง.',
    'numeric' => ':attribute ต้องเป็นตัวเลข.',
    'password' => 'รหัสผ่านไม่ถูกต้อง.',
    'present' => ':attribute ต้องมีค่า.',
    'regex' => ':attribute มีรูปแบบที่ไม่ถูกต้อง.',
    'required' => ':attribute จำเป็นต้องมีค่า.',
    'required_if' => ':attribute จำเป็นต้องมีค่าเมื่อ :other เป็น :value.',
    'required_unless' => ':attribute จำเป็นต้องมีค่า นอกจาก :other มีค่าเป็น :values.',
    'required_with' => ':attribute จำเป็นต้องมีค่าเมื่อ :values มีค่า.',
    'required_with_all' => ':attribute จำเป็นต้องมีค่าเมื่อ :values มีค่า.',
    'required_without' => ':attribute จำเป็นต้องมีค่าเมื่อ :values ไม่มีค่า.',
    'required_without_all' => ':attribute จำเป็นต้องมีค่าเมื่อ :values ไม่มีค่า.',
    'same' => ':attribute และ :other ต้องตรงกัน.',
    'size' => [
        'array' => ':attribute ต้องมี :size รายการ.',
        'file' => ':attribute ต้องมีขนาด :size กิโลไบต์.',
        'numeric' => ':attribute ต้องมีค่า :size.',
        'string' => ':attribute ต้องมีความยาว :size ตัวอักษร.',
    ],
    'starts_with' => ':attribute ต้องขึ้นต้นด้วยค่าใดค่าหนึ่ง: :values',
    'string' => ':attribute ต้องเป็นข้อความ.',
    'timezone' => ':attribute ต้องเป็นเขตเวลาที่ถูกต้อง.',
    'unique' => ':attribute ถูกใช้ไปแล้ว.',
    'uploaded' => ':attribute อัปโหลดไม่สำเร็จ.',
    'url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง.',
    'uuid' => ':attribute ต้องเป็น UUID ที่ถูกต้อง.',
    'ulid' => ':attribute ต้องเป็น ULID ที่ถูกต้อง.',
    'uppercase' => ':attribute ต้องเป็นตัวพิมพ์ใหญ่เท่านั้น.',
    'lowercase' => ':attribute ต้องเป็นตัวพิมพ์เล็กเท่านั้น.',
    'prohibited' => ':attribute ไม่ได้รับอนุญาต.',
    'prohibited_if' => ':attribute ไม่ได้รับอนุญาตเมื่อ :other เป็น :value.',
    'prohibited_unless' => ':attribute ไม่ได้รับอนุญาต นอกจาก :other มีค่าเป็น :values.',
    'prohibits' => ':attribute ห้ามมีค่าเมื่อ :other มีค่า.',
    'missing' => ':attribute ต้องไม่มี.',
    'missing_if' => ':attribute ต้องไม่มีเมื่อ :other เป็น :value.',
    'missing_unless' => ':attribute ต้องไม่มี นอกจาก :other มีค่าเป็น :values.',
    'missing_with' => ':attribute ต้องไม่มีเมื่อ :values มีค่า.',
    'missing_with_all' => ':attribute ต้องไม่มีเมื่อ :values มีค่า.',
    'present_if' => ':attribute ต้องมีเมื่อ :other เป็น :value.',
    'present_unless' => ':attribute ต้องมี นอกจาก :other มีค่าเป็น :values.',
    'present_with' => ':attribute ต้องมีเมื่อ :values มีค่า.',
    'present_with_all' => ':attribute ต้องมีเมื่อ :values มีค่า.',

    'accepted_if' => 'คุณต้องยอมรับ :attribute เมื่อ :other เป็น :value.',
    'accepted_unless' => 'คุณต้องยอมรับ :attribute นอกจาก :other เป็น :values.',
    'ascii' => ':attribute ต้องมีเฉพาะอักขระและสัญลักษณ์แบบเดี่ยว.',
    'can' => ':attribute มีค่าที่ไม่ได้รับอนุญาต.',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง.',
    'decimal' => ':attribute ต้องมีทศนิยม :decimal ตำแหน่ง.',
    'declined' => ':attribute ต้องปฏิเสธ.',
    'declined_if' => ':attribute ต้องปฏิเสธเมื่อ :other เป็น :value.',
    'doesnt_end_with' => ':attribute ต้องไม่ลงท้ายด้วยค่าใดค่าหนึ่ง: :values.',
    'doesnt_start_with' => ':attribute ต้องไม่ขึ้นต้นด้วยค่าใดค่าหนึ่ง: :values.',
    'enum' => ':attribute ที่เลือกไม่ถูกต้อง.',
    'extensions' => ':attribute ต้องเป็นไฟล์ประเภท: :values.',
    'hex_color' => ':attribute ต้องเป็นสีฮีกซ์ที่ถูกต้อง.',
    'mac_address' => ':attribute ต้องเป็น MAC address ที่ถูกต้อง.',
    'max_digits' => ':attribute ต้องไม่มีมากกว่า :max หลัก.',
    'min_digits' => ':attribute ต้องมีอย่างน้อย :min หลัก.',
    'required_array_keys' => ':attribute ต้องมีรายการสำหรับ: :values.',
    'required_if_accepted' => ':attribute จำเป็นต้องมีค่าเมื่อ :other ได้รับอนุญาต.',
    'required_unless_accepted' => ':attribute จำเป็นต้องมีค่า นอกจาก :other ได้รับอนุญาต.',
  
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
