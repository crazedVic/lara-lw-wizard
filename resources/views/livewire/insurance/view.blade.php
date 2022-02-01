<div>
    @if(!$embedded)
        Insurance Summary
        <div class="pl-2 border-t  border-green-500">
    @else
        <div class="pl-2 space-y-3">
    @endif
        <livewire:policy.view  :params="['parentId' => $policy->id]" :embedded="$embedded"/>
        <livewire:coverage.index :params="['parentId' => $policy->id]" :embedded="$embedded"/>
        <livewire:contact.index  :params="['parentId' => $policy->id]" :embedded="$embedded"/>
    </div>
</div>
