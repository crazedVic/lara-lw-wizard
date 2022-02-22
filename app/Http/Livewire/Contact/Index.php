<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{
    public $params;
    public $contacts = [];
    public bool $embedded = false;

    public function render()
    {
        if($this->params)
            $this->contacts = Contact::where('policy_id', $this->params[1]["id"])->get();
        return view('livewire.contact.index');
    }
}
