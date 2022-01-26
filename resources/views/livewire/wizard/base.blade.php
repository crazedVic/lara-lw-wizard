<div class="mx-auto w-full flex flex-col justify-start items-center space-y-2">
    <div>New Insurance Policy Wizard</div>
    <div class="h-80 w-96 border border-gray-300 shadow-sm shadow-zinc-500 p-2">
        @livewire($screen["component"])
    </div>

    <div class="flex flex-row justify-between w-96">
        <button wire:click="$emitTo('{{$screen["component"]}}','previous')"
                class="w-20 text-left">Previous</button>
        <button wire:click="$emitTo('{{$screen["component"]}}','next')"
                class="w-20 text-right">Next</button>
    </div>
</div>
