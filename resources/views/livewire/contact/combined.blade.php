<div>
    @if ($indexView)
       <livewire:contact.index :embedded="$embedded" :params="$params" :index="$index"/>
    @else
        <livewire:contact.edit :embedded="$embedded" :params="$params" :index="$index"/>
    @endif
</div>
