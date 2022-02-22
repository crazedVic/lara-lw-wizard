<div>
    @if(!$embedded)
        Insurance Summary
        <div class="pl-2 border-t  border-green-500">
    @else
        <div class="pl-2 space-y-3">
    @endif
        <livewire:policy.view  :params="$params" :embedded="$embedded"/>
        <livewire:coverage.index :params="$params" :embedded="$embedded"/>
        <livewire:contact.index  :params="$params" :embedded="$embedded"/>
    </div>
</div>
