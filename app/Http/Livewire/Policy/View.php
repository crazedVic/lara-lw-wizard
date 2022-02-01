<?php

namespace App\Http\Livewire\Policy;

use App\Models\Policy;
use Livewire\Component;

class View extends Component
{
    public $params;
    public $policy;
    public bool $embedded = false;

    public function render()
    {
        if($this->params)
            $this->policy = Policy::find($this->params['parentId']);
        return view('livewire.policy.view');
    }
}
