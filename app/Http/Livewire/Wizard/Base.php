<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['previous', 'next'];

    public array $screen;
    public int $currentIndex = 0;

    // componet will pass back next or repeat
    public $screens = [
        [
            "component" => 'meta.intro',
            "buttons" => [
                [
                    "label" => "Next",
                    "event" => "next",
                    "align" => "right",
                    "color" => "orange",
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

    public function emitWizardEvent(array $button){
       error_log($button["target"]);
       $this->emitTo($button["target"], $button["event"]);
    }

    public function next(){
        error_log("next wizard screen");
//        if($this->currentIndex < sizeof($this->screens))
//            $this->currentIndex ++;
    }

    public function previous(){
        error_log("previous wizard screen");
//        if($this->currentIndex > 0)
//            $this->currentIndex --;
    }
}
