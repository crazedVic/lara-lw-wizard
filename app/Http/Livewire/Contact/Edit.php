<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Edit extends Component
{

    protected $listeners = ['save'];

    public bool $embedded =  false;

    public function render()
    {
        return view('livewire.contact.edit');
    }

    public function save($repeat = false){
        if (!$repeat){
            $this->emitTo('wizard.base', 'next');
        }
        else {
            $this->reset();
            $this->embedded = true;
        }
    }
}
