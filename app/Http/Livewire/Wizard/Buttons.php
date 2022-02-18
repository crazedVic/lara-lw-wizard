<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Buttons extends Component
{
    protected $listeners = ['setButtons'];

    public $buttons = [];

    //update the buttons to new set
    public function setButtons($buttons)
    {
        $this->buttons = $buttons;
    }

    public function render()
    {
        return view('livewire.wizard.buttons');
    }
}
