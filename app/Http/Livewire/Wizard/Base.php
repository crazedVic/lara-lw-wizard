<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['previous', 'next'];

    public array $screen;
    public int $currentIndex = 4;
    public $parentId = 20;

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
                    "label" => "Contacts",
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
            "component" => 'contact.index',
            "buttons" => [
                [
                    "label" => "Add More",
                    "event" => "previous",
                    "parameter" => false,
                    "align" => "left",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ],
                [
                    "label" => "Coverages",
                    "event" => "next",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ]
            ]
        ],
        [
            "component" => 'coverage.edit',
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
                    "label" => "Continue",
                    "event" => "save",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "coverage.edit",
                ],
            ]
        ],
        [
            "component" => 'coverage.index',
            "buttons" => [
                [
                    "label" => "Add More",
                    "event" => "previous",
                    "parameter" => false,
                    "align" => "left",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ],
                [
                    "label" => "Summary",
                    "event" => "next",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ]
            ]
        ],
        [
            "component" => 'insurance.view',
            "buttons" => [
                [
                    "label" => "Previous",
                    "event" => "previous",
                    "parameter" => false,
                    "align" => "left",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ],
                [
                    "label" => "Confirm",
                    "event" => "next",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "green",
                    "enabled" => true,
                    "target" => "wizard.base",
                ]
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
                    "align" => "right",
                    "color" => "blue",
                    "enabled" => true,
                    "target" => "meta.outro",
                    ],
                    [
                        "label" => "Add Another",
                        "event" => "save",
                        "parameter" => "/insurance/add", //can change form behaviour
                        "align" => "left",
                        "color" => "green",
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
