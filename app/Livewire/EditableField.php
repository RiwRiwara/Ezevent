<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Http\Controllers\User\UserController;

class EditableField extends Component
{

    public $oldValue ;
    public $fieldName ;
    public $label_show;
    public $newValue;
    public $show = false;


    public function render()
    {
        return view('livewire.editable-field');
    }

    public function mount($fieldName, $label_show)
    {
        $this->fieldName = $fieldName;
        $this->label_show = $label_show;
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
            toastr()->addSuccess($this->label_show . ' ' . __('success.update_success'));
        } catch (\Exception $e) {
            toastr()->addError(__('error.profile_update'));
            return redirect()->back();
        }
    }
}
