<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

abstract class EditableField extends Component
{

    public $oldValue ;
    public $fieldName ;
    public $label_show;
    public $newValue;
    public $show = false;
    public $item_id;
    public $inputType = 'text';


    public function render()
    {
        return view('livewire.editable-field');
    }

    public function mount($fieldName, $label_show, $oldValue, $item_id = null, $inputType = 'text' )
    {
        $this->fieldName = $fieldName;
        $this->label_show = $label_show;
        $this->oldValue = $oldValue;
        $this->newValue = $this->oldValue;
        $this->item_id = $item_id;
        $this->inputType = $inputType;

    }

    abstract public function save();
}
