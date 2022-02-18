<div class="mx-auto w-full flex flex-col justify-start items-center space-y-2">
    <div>New Insurance Policy Wizard</div>
    <div class="w-96 border border-gray-300 shadow-sm shadow-zinc-500 p-2 overflow-y-auto overflow-x-clip" style="height:70vh" id="wizardBox">
        <livewire:is :component="$screens[$currentIndex]['component']"
                     :embedded="true"
                     :params="$params"
                     :index="$currentIndex"
                     wire:key/>
        <script wire:ignore>
            document.addEventListener("DOMContentLoaded", () => {
                Livewire.hook('component.initialized', (component) => {
                    document.getElementById('wizardBox').scrollTo(0,0);
                })
            });
        </script>
    </div>

    <livewire:wizard.buttons :buttons="$screens[$currentIndex]['buttons']"/>
</div>
