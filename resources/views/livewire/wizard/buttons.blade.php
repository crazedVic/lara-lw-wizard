<div class="flex flex-row justify-between w-96">
    <div class="flex justify-start">
        @foreach($buttons as $button)
                @if($button['align'] == "left")
                    <button
                        onclick="Livewire.emitTo('{{$button['target']}}', '{{$button['event']}}','{{$button['parameter'] ?? null}}' )"
                        type="button"
                        class="text-left
                                bg-{{$button['enabled'] ? $button['color'] . '-600' : 'gray-300'}}
                                    {{!$button['enabled'] ? 'text-gray-400 cursor-not-allowed' : ''}}  ">
                        {{$button['label']}}
                    </button>
                @endif
        @endforeach
    </div>
    <div class="flex justify-center">
        @foreach($buttons as $button)
            <div>
                @if($button['align'] == "center")
                    <button
                        onclick="Livewire.emitTo('{{$button['target']}}', '{{$button['event']}}','{{$button['parameter'] ?? null}}' )"
                        type="button"
                        class="bg-{{$button['enabled'] ? $button['color'] : 'gray'}}-600 text-center">{{$button['label']}}</button>
                @endif
            </div>
        @endforeach
    </div>
    <div class="flex justify-end">
    @foreach($buttons as $button)
        <div>
            @if($button['align'] == "right")
                <button
                    onclick="Livewire.emitTo('{{$button['target']}}', '{{$button['event']}}','{{$button['parameter'] ?? null}}' )"
                    type="button"
                    class="bg-{{$button['enabled'] ? $button['color'] : 'gray'}}-600 text-right">{{$button['label']}}</button>
            @endif
        </div>
    @endforeach
    </div>
</div>
