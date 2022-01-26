<?php

namespace App\Http\Livewire;

use App\Models\Policy;
use Livewire\Component;

class Index extends Component
{

    public $policies;

    public function render()
    {
        $this->policies = Policy::all();

        return view('livewire.index');
    }
}
