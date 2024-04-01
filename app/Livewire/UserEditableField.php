<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;

class UserEditableField extends EditableField
{

    public function save()
    {
        request()->merge([
            $this->fieldName => $this->newValue
        ]);
        $validator = Validator::make(request()->all(), (new RegisterRequest())->rules());

        if ($validator->fails()) {
            toastr()->addError($validator->errors()->first());
            return;
        }

        try {
            $user_id = auth()->user()->user_id;
            User::where('user_id', $user_id)->update([
                $this->fieldName => $this->newValue
            ]);
            $this->oldValue = $this->newValue;
            toastr()->addSuccess($this->label_show . ' ' . __('success.update_success'));
        } catch (\Exception $e) {
            toastr()->addError(__('error.profile_update'));
        }
    }
}
