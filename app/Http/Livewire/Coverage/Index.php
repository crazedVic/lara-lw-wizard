<?php

namespace App\Http\Livewire\Coverage;

use App\Models\Coverage;
use Livewire\Component;

class Index extends Component
{

    public $parentId;
    public $coverages =[];

    public function render()
    {
        if($this->parentId)
            $this->coverages = Coverage::where('policy_id',$this->parentId)->get();
        return view('livewire.coverage.index');
    }
}
