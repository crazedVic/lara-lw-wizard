<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['previous', 'next'];

    public array $screen;
    public int $currentIndex = 0;
    public $parentId;

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
                    "parameter" => null,
                    "enabled" => true,
                    "target" => "wizard.base"
                ],
                [
                    "label" => "Previous",
                    "event" => "next",
                    "align" => "left",
                    "color" => "violet",
                    "parameter" => null,
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
                    "parameter" => null,
                    "enabled" => true,
                    "target" => "wizard.base"
                ],
                [
                    "label" => "Next",
                    "event" => "save",
                    "parameter" => false, //repeat
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "policy.edit",
                ],
            ]
        ],
        [
            "component" => 'contact.edit',
            "buttons" => [
                [
                    "label" => "Skip",
                    "event" => "next",
                    "parameter" => false,
                    "align" => "left",
                    "color" => "orange",
                    "enabled" => true,
                    "target" => "wizard.base",
                ],
                [
                    "label" => "Add More",
                    "event" => "save",
                    "parameter" => true,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "contact.edit",
                ],
                [
                    "label" => "Continue",
                    "event" => "save",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "contact.edit",
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

    public function next($id = null){
        if($id){
            $this->parentId = $id;
        }

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
