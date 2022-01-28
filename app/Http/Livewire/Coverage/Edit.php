<?php

namespace App\Http\Livewire\Coverage;

use App\Models\Coverage;
use Livewire\Component;

class Edit extends Component
{
    protected $listeners = ['save'];

    public bool $embedded =  false;

    public $parentId;

    public $name;
    public $limit;
    public $deductible_amount;
    public $deductible;
    public $notes;

    protected $rules = [
        'name' => 'required|string|min:4',
        'limit' => 'required|numeric',
        'deductible' => 'boolean|nullable',
        'deductible_amount' => 'required',
        'notes' => 'string|min:5',
    ];

    public function render()
    {
        return view('livewire.coverage.edit');
    }

    public function save($repeat = false){
        // may no longer need repeat, since we are changing default flow.
        $parentId = $this->parentId;
        $this->validate();

        $coverage = Coverage::create([
            'policy_id' => $this->parentId,
            'name' => $this->name,
            'limit' => $this->limit,
            'deductible_amount' => $this->deductible_amount,
            'deductible' => $this->deductible ?? false,
            'notes' => $this->notes
        ]);

        if (!$repeat){
            $this->emitTo('wizard.base', 'next');
        }
        else {
            $this->reset();
            $this->embedded = true;
            $this->parentId = $parentId;
        }
    }
}
