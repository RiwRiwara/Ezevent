<?php

namespace App\Livewire;

use App\Models\Event;
use App\Traits\AdditionalValidationTrait;



class EventEditableField extends EditableField
{
    use AdditionalValidationTrait;
    public function save()
    {
        $request = request()->merge([
            $this->fieldName => $this->newValue
        ]);

        $errors = [];
        if ($this->fieldName === 'event_name') {
            $errors = $this->eventNameValidation($request);
        }else if ($this->fieldName === 'contact_email') {
            $errors = $this->eventContactEmailValidation($request);
        }else if ($this->fieldName === 'contact_phone') {
            $errors = $this->eventContactPhoneValidation($request);
        }

        if (!empty($errors)) {
            $errorMessage = json_encode(reset($errors));
            toastr()->AddError($errorMessage, 'Event update failed');
            return redirect()->back()->withErrors($errors)->withInput()->withFragment('event_setting');
        }



        try {
            Event::where('event_id', $this->item_id)->update([
                $this->fieldName => $this->newValue
            ]);

            $this->oldValue = $this->newValue;
            toastr()->addSuccess($this->label_show . ' ' . __('success.update_success'));
        } catch (\Exception $e) {
            toastr()->addError(__('error.event_update_failed'));
            return redirect()->back();
        }
    }
}
