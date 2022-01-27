<div>
    Insurance Summary
    <div class="pl-2 border-t  border-green-500">
        <livewire:policy.view  :parentId="$policy->id"/>
        <livewire:coverage.index :parentId="$policy->id"/>
        <livewire:contact.index  :parentId="$policy->id"/>
    </div>
</div>
