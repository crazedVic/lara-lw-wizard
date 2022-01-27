<?php

namespace App\Http\Livewire\Meta;

use Livewire\Component;

class Outro extends Component
{

    protected $listeners = ["save"];

    public function render()
    {
        return view('livewire.meta.outro');
    }

    public function save($parameter){
        return redirect($parameter);
    }
}
