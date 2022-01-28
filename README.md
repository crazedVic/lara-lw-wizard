## Dynamic Configurable Wizard

### Features
- built using tailwind,alpinejs,livewire,php8
- created initially January 2022
- 


### Requirements
Going to do a pseudo insurance policy tracking system, user can add new policy, enter policy details, then add coverages
as many as needed, same with contacts.  Going to try to do this by having an array of livewire components and their 
respective configuration options, as well as some general wizard options such as save page by page or save at the end.  
  
I try to avoid using session objects but we shall see how that goes.  

### How To
Build your components using livewire, then configure them in Wizard.Base component `$screens` array:

```
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
```
- I used a bool $embedded to alter views of components based on where they are loaded, so I can make more compact styles for inside the wizard, hide buttons.
- I make heavy use of emitTo, and I found that I had to emit from blade file not from class functions as it was causing my component to be reloaded.
