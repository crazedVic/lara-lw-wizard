<?php

namespace App\Http\Livewire\Insurance;

use App\Models\Policy;
use Livewire\Component;

class View extends Component
{
    public Policy $policy;

    public $params;

    public bool $embedded = false;

    public function render()
    {
        if($this->embedded && $this->params){
            $this->policy = Policy::find($this->params[1]["id"]);
        }
        return view('livewire.insurance.view');
    }
}
