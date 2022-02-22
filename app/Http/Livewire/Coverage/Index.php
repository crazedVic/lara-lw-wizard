<?php

namespace App\Http\Livewire\Coverage;

use App\Models\Coverage;
use App\Models\Policy;
use Livewire\Component;

class Index extends Component
{
    public $params;
    public $index;
    public $coverages =[];
    public bool $embedded = false;
    public Policy $policy;

    public function render()
    {

        if($this->params && $this->embedded){
            $this->coverages = $this->params[$this->index-1];
            //$this->coverages = Coverage::where('policy_id',$this->params[1]["id"])->get();
        }
        elseif(isset($this->policy)){
            $this->coverages = Coverage::where('policy_id',$this->policy->id)->get();
        }

        return view('livewire.coverage.index');
    }
}
