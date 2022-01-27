<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{

    public $parentId;
    public $contacts = [];

    public function render()
    {
        if($this->parentId)
            $this->contacts = Contact::where('policy_id',$this->parentId)->get();
        return view('livewire.contact.index');
    }
}
