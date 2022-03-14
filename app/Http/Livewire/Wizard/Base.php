<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['previous', 'next', 'redirection', 'redirectToCreated', 'changeButtons','saveAll'];

    public array $screen;
    public int $currentIndex = 0;
    public $params;

    // componet will pass back next or repeat
    public $screens = [
        [
            "component" => 'meta.intro',
            "model" => null,
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
            "model" => "App\\Models\\Policy",
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
            "component" => 'contact.combined',
            "model" => "App\\Models\\Contact",
            "foreignKey" => "policy_id",
            "buttons" => [
                [
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
                ]
            ]
        ],
        [
            "component" => 'coverage.edit',
            "model" =>"App\\Models\\Coverage",
            "foreignKey" => "policy_id",
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
            "model" => null,
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
            "model" => null,
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
                    "event" => "saveAll",
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
            "model" => null,
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

    public function mount (){
        $this->params = array_fill(0,sizeof($this->screens), []);
    }

    public function render()
    {
        $this->emitTo('wizard.buttons', 'setButtons', $this->screens[$this->currentIndex]['buttons']);
        $this->screen = $this->screens[$this->currentIndex];
        return view('livewire.wizard.base');
    }

    public function next($params = null){
        if($params){
            $this->params[$this->currentIndex] = $params;
        }

        error_log("next wizard screen");
        if($this->currentIndex < sizeof($this->screens)){
            $this->currentIndex ++;
        }
    }

    public function saveAll(){
        // this would be where we actually save all the in memory data to db.
        $parent = null;
        $records_saved = 0;
        foreach($this->screens as $key => $screen ){
            if($screen["model"]){
                $data = $this->params[$key];

                foreach($data as $entry){
                    if(is_array($entry)){
                        $model = new $screen["model"]($entry);
                        $model[$screen['foreignKey']] = $parent->id;
                        $records_saved++;
                        if(!isset($model->id)){
                            $model->save();
                        }
                    }
                    else{
                        if(!$parent) {
                            $parent = new $screen["model"]($data);
                            $records_saved++;
                            if (!isset($parent->id)) {
                                $parent->save();
                            }
                        }
                        else{
                            $model = new $screen["model"]($data);
                            $records_saved++;
                            if (!isset($model->id)){
                                $model[$screen['foreignKey']] = $parent->id;
                                $model->save();
                            }
                        }
                        break;
                    }
                }
            }
        }
        error_log($records_saved);
//        if($this->currentIndex < sizeof($this->screens)){
//            $this->currentIndex ++;
//        }
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

    //append base url to parent id
    //base_url must end with a slash (/)
    //or querystring declaration(?x=)
    public function redirectToCreated($base_url)
    {
        redirect($base_url . $this->params['parent_id']);
    }

    //overwrite the buttons
    public function changeButtons($index, $buttons)
    {
        $this->screens[$index]['buttons'] = $buttons;
    }
}
