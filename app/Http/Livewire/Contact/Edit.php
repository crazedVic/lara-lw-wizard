<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Edit extends Component
{
    protected $listeners = ['save'];

    public bool $embedded =  false;

    public $params;
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
        $params = $this->params;

        $this->validate();
        $contact = Contact::create([
            'policy_id' => $params[1]["id"],
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email
        ]);

        $this->emitTo('contact.combined', 'continue', $contact);
        // if (!$repeat){
        //     $this->emitTo('wizard.base', 'next');
        // }
        // else {
        //     $this->reset();
        //     $this->embedded = true;
        //     $this->params = $params;
        // }
    }
}
