<?php

namespace App\Http\Livewire\Policy;

use Livewire\Component;

class Edit extends Component
{
    public bool $embedded = false;

    protected $listeners = ["save"];

//    public function mount($embedded = false){
//        $this->embedded = $embedded;
//    }

    public function render()
    {
        return view('livewire.policy.edit');
    }

    public function save($parameter){
        $this->emitTo('wizard.base', 'next');
    }
}
