<?php

namespace App\Http\Livewire\Policy;

use App\Models\Policy;
use Livewire\Component;

class Edit extends Component
{
    public bool $embedded = false;

    protected $listeners = ["save"];

    public $brokerage;
    public $month = "12";
    public $day = "01";
    public $annual_premium = "100000";
    public $payment_schedule = "annual";

    public $rules = [
        'brokerage' => 'required|string|min:6',
        'month'=> 'string',
        'day'=> 'string',
        'annual_premium' => 'required',
        'payment_schedule'=> 'required|string'
    ];

    public function render()
    {
        return view('livewire.policy.edit');
    }

    public function save($parameter){
        error_log("Saving policy");
        $this->validate();
        Policy::create([
            'brokerage' =>$this->brokerage,
            'month' => $this->month,
            'day'=> $this->day,
            'annual_premium' => $this->annual_premium,
            'payment_schedule'=> $this->payment_schedule
        ]);
        $this->emitTo('wizard.base', 'next');
    }
}
