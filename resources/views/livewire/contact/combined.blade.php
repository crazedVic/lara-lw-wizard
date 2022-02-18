<div>
    @if ($indexView)
       <livewire:contact.index :embedded="$embedded" :params="$params"/>
    @else
        <livewire:contact.edit :embedded="$embedded" :params="$params"/>
    @endif
</div>
