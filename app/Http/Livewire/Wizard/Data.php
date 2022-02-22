<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Data extends Component
{

    public $data = [];

    protected $listeners = ["dataChanged"];

    public function dataChanged($data){
        $this->data = $data;
        // do we need to emit the data change back to other views?

    }

    public function render()
    {
        return view('livewire.wizard.data');
    }
}
