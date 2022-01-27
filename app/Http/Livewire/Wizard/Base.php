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
                    "enabled" => true,
                    "target" => "wizard.base"
                ],
                [
                    "label" => "Previous",
                    "event" => "next",
                    "align" => "left",
                    "color" => "violet",
                    "enabled" => false,
                    "target" => "wizard.base"
                ]
            ]

        ],
        [
            "component" => 'policy.edit',
            "buttons" => [
                [
                    "label" => "Previous",
                    "event" => "previous",
                    "align" => "left",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base"
                ],
                [
                    "label" => "Next",
                    "event" => "next",
                    "parameter" => false, //repeat
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ],
            ]
        ],
        [
            "component" => 'meta.outro',
            "buttons" =>
                [
                    [
                    "label" => "Finish",
                    "event" => "save",
                    "parameter" => "/", //can change form behaviour
                    "align" => "center",
                    "color" => "blue",
                    "enabled" => true,
                    "target" => "meta.outro",
                    ]
            ],
        ]
];

    public function render()
    {
       $this->screen = $this->screens[$this->currentIndex];
       return view('livewire.wizard.base');
    }

    public function emitWizardEvent(array $button){
       error_log($button["target"]);
       $this->emitTo($button["target"], $button["event"], $button["parameter"] ?? null);
    }

    public function next(){
        error_log("next wizard screen");
        if($this->currentIndex < sizeof($this->screens)){
            $this->currentIndex ++;
        }

    }

    public function previous(){
        error_log("previous wizard screen");
        if($this->currentIndex > 0){
            $this->currentIndex --;
        }

    }
}
