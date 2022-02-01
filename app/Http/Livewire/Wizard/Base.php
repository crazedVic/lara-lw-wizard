<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['previous', 'next', 'redirection'];

    public array $screen;
    public int $currentIndex = 0;
    public $params;

    // componet will pass back next or repeat
    public $screens = [
        [
            "component" => 'meta.intro',
            "buttons" => [
                [
                    "label" => "Next",
                    "event" => "next",
                    "align" => "right",
                    "color" => "green",
                    "parameter" => null,
                    "enabled" => true,
                    "target" => "wizard.base"
                ],
                [
                    "label" => "Exit",
                    "event" => "redirection",
                    "parameter" => "/", //can change form behaviour
                    "align" => "left",
                    "color" => "gray",
                    "enabled" => true,
                    "target" => "wizard.base",
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
                    "label" => "Complete",
                    "event" => "next",
                    "parameter" => false,
                    "align" => "right",
                    "color" => "blue",
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
                        "event" => "redirection",
                        "parameter" => "/", //can change form behaviour
                        "align" => "right",
                        "color" => "blue",
                        "enabled" => true,
                        "target" => "wizard.base",
                    ],
                    [
                        "label" => "Add More",
                        "event" => "redirection",
                        "parameter" => "/insurance/add", //can change form behaviour
                        "align" => "left",
                        "color" => "green",
                        "enabled" => true,
                        "target" => "wizard.base",
                    ]
            ],
        ]
];

    public function render()
    {
       $this->screen = $this->screens[$this->currentIndex];
       return view('livewire.wizard.base');
    }

    public function next($params = null){
        if($params){
            $this->params = $params;
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

    public function redirection($parameter = null){
        if($parameter)
            return redirect($parameter);
    }
}
