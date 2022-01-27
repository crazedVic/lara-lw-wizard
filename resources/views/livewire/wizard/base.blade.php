<div class="mx-auto w-full flex flex-col justify-start items-center space-y-2">
    <div>New Insurance Policy Wizard</div>
    <div class="h-80 w-96 border border-gray-300 shadow-sm shadow-zinc-500 p-2">
        @livewire($screen['component'])
    </div>

    <div class="flex flex-row justify-between w-96">
        @foreach($this->screen['buttons'] as $button)
        <button wire:click="emitWizardEvent({{json_encode($button)}})"
                class="w-20 bg-{{$button['color']}}-500 text-left">{{$button['label']}}</button>
        @endforeach
    </div>
</div>
