<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditableFieldDropdown extends Component
{

    public $oldValue;
    public $fieldName;
    public $value_show;
    public $label_show;
    public $newValue;
    public $show = false;

    public $optionsObject;


    public function render()
    {
        return view('livewire.editable-field-dropdown');
    }

    public function mount($fieldName, $label_show, $optionsObject)
    {
        $this->fieldName = $fieldName;
        $this->label_show = $label_show;
        $this->optionsObject = json_decode(html_entity_decode($optionsObject), true);

        $isThai = app()->getLocale() === 'th';
        $field_Language = $isThai ? 'name_th' : 'name_en';
        // $this->value_show = auth()->user()->$fieldName[$field_Language];

        $this->oldValue = auth()->user()->$fieldName;
        $this->newValue = $this->oldValue;
    }

    public function save()
    {
        try {
            $user_id = auth()->user()->user_id;
            User::where('user_id', $user_id)->update([
                $this->fieldName => $this->newValue
            ]);
            $this->oldValue = $this->newValue;

            $isThai = app()->getLocale() === 'th';
            $field_Language = $isThai ? 'name_th' : 'name_en';
            $this->value_show = $this->optionsObject[$this->newValue - 1][$field_Language];

            toastr()->addSuccess($this->label_show . ' ' . __('success.update_success'));
        } catch (\Exception $e) {
            toastr()->addError(__('error.profile_update'));
            return redirect()->back();
        }
    }
}
