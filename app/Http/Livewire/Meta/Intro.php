<?php

namespace App\Http\Livewire\Meta;

use Livewire\Component;

class Intro extends Component
{
    protected $listeners = ["next","previous"];

    public function render()
    {
        return view('livewire.meta.intro');
    }

    public function next(){
        error_log('next');
    }

    public function previous(){
        error_log('previous');
    }
}
