<?php

namespace App\Http\Livewire\Insurance;

use App\Models\Policy;
use Livewire\Component;

class View extends Component
{

    public Policy $policy;

    public $parentId;

    public bool $embedded = false;

    public function render()
    {
        if($this->embedded && $this->parentId){
            $this->policy = Policy::find($this->parentId);
        }
        return view('livewire.insurance.view');
    }
}
