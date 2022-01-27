<div>
    Contacts
    <div class="ml-4 border-l-2 border-green-500 p-2">
        @forelse($contacts as $contact)
            <div class="w-full  text-sm">{{$contact->name}}</div>
        @empty
            <div class="w-full  text-sm">No Contacts Found</div>
        @endforelse
    </div>
</div>
