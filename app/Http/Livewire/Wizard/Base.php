<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{

    public $screen;
    public int $currentIndex = 0;


    // componet will pass back next or repeat
    public $screens = [
        [
            "component" => 'meta.intro',
            "buttons" => [
                [
                    "label" => "Next",
                    "eventName" => "next",
                    "align" => "right",
                    "color" => "red",
                    "target" => "wizard.base"
                ]
            ]

        ],
        [
            "component" => 'contact.edit',
            "buttons" => [
                [
                    "label" => "Save & Add More",
                    "eventName" => "save",
                    "parameter" => true, //repeat
                    "align" => "right",
                    "color" => "green",
                    "target" => "contact.edit",
                ],[
                    "label" => "Previous",
                    "eventName" => "previous",
                    "parameter" => null, //repeat
                    "align" => "left",
                    "color" => "amber",
                    "target" => "wizard.base",
                ]
            ]
        ],
        ["component" => 'contact.edit'],
        ["component" => 'coverage.edit'],
        ["component" => 'coverage.edit'],
        ["component" => 'meta.outro']
];
    public function render()
    {
        $this->screen = $this->screens[$this->currentIndex];
        return view('livewire.wizard.base');
    }

    public function emitWizardEvent($screen){

    }

    public function next(){
        if($this->currentIndex < sizeof($this->screens))
            $this->currentIndex ++;
    }

    public function previous(){
        if($this->currentIndex > 0)
            $this->currentIndex --;
    }
}
