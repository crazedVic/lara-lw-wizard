<div>
    @if(!$embedded)
        Insurance Summary
        <div class="pl-2 border-t  border-green-500">
    @else
        <div class="pl-2 space-y-3">
    @endif
        <livewire:policy.view  :parentId="$policy->id" :embedded="$embedded"/>
        <livewire:coverage.index :parentId="$policy->id" :embedded="$embedded"/>
        <livewire:contact.index  :parentId="$policy->id" :embedded="$embedded"/>
    </div>
</div>
