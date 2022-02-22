<?php

namespace App\Http\Livewire\Policy;

use App\Models\Policy;
use Livewire\Component;

class Edit extends Component
{
    public bool $embedded = false;

    protected $listeners = ["save"];

    public $brokerage;
    public $month;
    public $day;
    public $annual_premium;
    public $payment_schedule;

    public $rules = [
        'brokerage' => 'required|string|min:6',
        'month'=> 'numeric|required|max:12',
        'day'=> 'numeric|required|max:31',
        'annual_premium' => 'required|numeric',
        'payment_schedule'=> 'required|string'
    ];

    public function render()
    {
        return view('livewire.policy.edit');
    }

    public function save($parameter = null){
        error_log("Saving policy");
        $this->validate();

        $policy =new Policy([
            'brokerage' =>$this->brokerage,
            'month' => $this->month,
            'day'=> $this->day,
            'annual_premium' => $this->annual_premium,
            'payment_schedule'=> $this->payment_schedule
        ]);

        if(!$this->embedded){
            $policy->save();
        }
        else{
            //remove next line once colossal data mode works
            $policy->save();

            $this->emitTo('wizard.base', 'next', $policy);
        }

    }
}
