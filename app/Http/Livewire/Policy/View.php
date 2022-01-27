<?php

namespace App\Http\Livewire\Policy;

use App\Models\Policy;
use Livewire\Component;

class View extends Component
{

    public $parentId;
    public $policy;

    public function render()
    {
        if($this->parentId)
            $this->policy = Policy::find($this->parentId);
        return view('livewire.policy.view');
    }
}
