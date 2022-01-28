<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Edit extends Component
{

    protected $listeners = ['save'];

    public bool $embedded =  false;

    public $parentId;
    public $name;
    public $phone;
    public $email;

    protected $rules = [
        'name' => 'required|string|min:4',
        'phone' => 'required|string|min:10',
        'email' => 'required|string|min:5|max:256'
    ];

    public function render()
    {
        return view('livewire.contact.edit');
    }

    public function save($repeat = false){
        $parentId = $this->parentId;
        $this->validate();
        $contact = Contact::create([
            'policy_id' => $this->parentId,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email
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
