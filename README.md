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

### TODO

- need to create the add contact -> show contact index -> loop back to add more  or continue
- need to create add coverage form -> show coverage index -> loop back to add more or continue
- need to create an insurance policy edit view that lets you edit all 3 in the same page
- index view and edit view will swap spots inline on the edit insurance page
- need to figure out if we can create a scrollable div inside the wizard
- create a wizard summary page (if previous one possible)

