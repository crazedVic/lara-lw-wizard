<div class="mx-auto w-full flex flex-col justify-start items-center space-y-2">
    <div>New Insurance Policy Wizard</div>
    <div class="w-96 border border-gray-300 shadow-sm shadow-zinc-500 p-2 overflow-y-auto overflow-x-clip" style="height:70vh" id="wizardBox">
        <livewire:is :component="$screens[$currentIndex]['component']"
                     :embedded="true"
                     :params="$params"
                     wire:key/>
        <script wire:ignore>
            document.addEventListener("DOMContentLoaded", () => {
                Livewire.hook('component.initialized', (component) => {
                    document.getElementById('wizardBox').scrollTo(0,0);
                })
            });
        </script>
    </div>

    <div class="flex flex-row justify-between w-96">
        <div class="flex justify-start">
            @foreach($this->screens[$currentIndex]['buttons'] as $button)
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
            @foreach($this->screen['buttons'] as $button)
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
        @foreach($this->screen['buttons'] as $button)
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
</div>
