<div>
    @if(!$embedded)
        Insurance Summary
        <div class="pl-2 border-t  border-green-500">
    @else
        <div class="pl-2 space-y-3">
    @endif
            {{-- loop thru screens that have a model tied to them and show them, using screen index and name of view --}}
        <livewire:policy.view  :params="$params" :embedded="$embedded" index="1"/>
        <livewire:contact.index  :params="$params" :embedded="$embedded" index="2"/>
        <livewire:coverage.index :params="$params" :embedded="$embedded" index="4"/>
    </div>
</div>
