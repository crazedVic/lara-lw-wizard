<div class="mx-auto w-full flex flex-col justify-start items-center space-y-2">
    <div>New Insurance Policy Wizard</div>
    <div class="h-80 w-96 border border-gray-300 shadow-sm shadow-zinc-500 p-2">
        <livewire:is :component="$screens[$currentIndex]['component']" :embedded="true" wire:key/>
    </div>

    <div class="flex flex-row justify-between w-96">
        <div>
        @foreach($this->screens[$currentIndex]['buttons'] as $button)
                @if($button['align'] == "left")
                    <button wire:click="emitWizardEvent({{json_encode($button)}})"
                            type="button"
                            class="w-16
                                bg-{{$button['enabled'] ? $button['color'] . '-600' : 'gray-300'}}
                                text-left
                                 {{!$button['enabled'] ? 'text-gray-400 cursor-not-allowed' : ''}}  ">
                        {{$button['label']}}
                    </button>
                @endif

        @endforeach
        </div>
        <div>
            @foreach($this->screen['buttons'] as $button)
                <div>
                    @if($button['align'] == "center")
                        <button wire:click="emitWizardEvent({{json_encode($button)}})"
                                type="button"
                                class="w-16 bg-{{$button['enabled'] ? $button['color'] : 'gray'}}-600 text-center">{{$button['label']}}</button>
                    @endif
                </div>
            @endforeach
        </div>
        <div>
        @foreach($this->screen['buttons'] as $button)
            <div>
                @if($button['align'] == "right")
                    <button wire:click="emitWizardEvent({{json_encode($button)}})"
                            type="button"
                            class="w-16 bg-{{$button['enabled'] ? $button['color'] : 'gray'}}-600 text-right">{{$button['label']}}</button>
                @endif
            </div>
        @endforeach
        </div>
    </div>
</div>
