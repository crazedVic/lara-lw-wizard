<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{
    public $params;
    public $contacts = [];
    public $index;
    public bool $embedded = false;
    public Policy $policy;

    public function render()
    {
        if($this->params && $this->embedded) {
            $this->contacts = $this->params[$this->index];
        }
        elseif(isset($this->policy)){
            $this->contacts = Contact::where('policy_id', $this->policy->id)->get();
        }
        return view('livewire.contact.index');
    }
}
