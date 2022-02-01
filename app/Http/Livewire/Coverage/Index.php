<?php

namespace App\Http\Livewire\Coverage;

use App\Models\Coverage;
use Livewire\Component;

class Index extends Component
{
    public $params;
    public $coverages =[];
    public bool $embedded = false;

    public function render()
    {
        if($this->params)
            $this->coverages = Coverage::where('policy_id',$this->params['parentId'])->get();
        return view('livewire.coverage.index');
    }
}
