<?php

namespace App\Http\Livewire\Insurance;

use App\Models\Policy;
use Livewire\Component;

class View extends Component
{

    public Policy $policy;



    public function render()
    {
        return view('livewire.insurance.view');
    }
}
