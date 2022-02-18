<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Combined extends Component
{   
    protected $listeners = ['add', 'continue', 'save', 'skip'];

    public $index;
    public $params;
    public bool $indexView = false; //index view or edit view 
    public bool $embedded = false;

    public function add()
    {
        $this->emitTo('wizard.buttons', 'setButtons',
                                    [[
                                        "label" => "Skip",
                                        "event" => "skip",
                                        "parameter" => false,
                                        "align" => "left",
                                        "color" => "orange",
                                        "enabled" => true,
                                        "target" => "contact.combined",
                                    ],
                                    [
                                        "label" => "Continue",
                                        "event" => "save",
                                        "parameter" => false,
                                        "align" => "right",
                                        "color" => "green",
                                        "enabled" => true,
                                        "target" => "contact.combined",
                                    ]]);
        $this->indexView = false;
    }

    //save child on edit view
    public function save()
    {
        if (!$this->indexView)
        {
            $this->emitTo('contact.edit', 'save');
        }
    }

    public function skip()
    {
        //skip adding current contact
        if (!$this->indexView)
        {
            $this->emitTo('wizard.buttons', 
                            'setButtons',[[
                                            "label" => "Add More",
                                            "event" => "add",
                                            "parameter" => false,
                                            "align" => "left",
                                            "color" => "green",
                                            "enabled" => true,
                                            "target" => "contact.combined",
                                        ],
                                        [
                                            "label" => "Next",
                                            "event" => "continue",
                                            "parameter" => false,
                                            "align" => "right",
                                            "color" => "green",
                                            "enabled" => true,
                                            "target" => "contact.combined",
                                        ]]);                                        
            $this->indexView = true;
        }
    }

    //save or continue, depending on indexView
    public function continue()
    {
        if ($this->indexView)
        {
            $this->emitTo('wizard.base', 'next');
        }
        else
        {   
            $this->emitTo('wizard.buttons', 
                            'setButtons',[[
                                            "label" => "Add More",
                                            "event" => "add",
                                            "parameter" => false,
                                            "align" => "left",
                                            "color" => "green",
                                            "enabled" => true,
                                            "target" => "contact.combined",
                                        ],
                                        [
                                            "label" => "Next",
                                            "event" => "continue",
                                            "parameter" => false,
                                            "align" => "right",
                                            "color" => "green",
                                            "enabled" => true,
                                            "target" => "contact.combined",
                                        ]]);
                                                        
            $this->indexView = true;
        }
    }

    public function render()
    {
        return view('livewire.contact.combined');
    }
}
