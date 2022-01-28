<div>
    Contacts
    @if(!$embedded)
        <div class="ml-4 border-l-2 border-green-500 p-2 text-xs">
    @else
        <div class="text-xxs border-t border-green-500 w-3/4 mb-2">
    @endif

        @forelse($contacts as $contact)
            <div class="w-full pl-2 text-sm">{{$contact->name}}</div>
            <div class="w-full pl-4 text-gray-500">{{$contact->email}}</div>
            <div class="w-full pl-4 text-gray-500">{{$contact->phone}}</div>
        @empty
            <div class="w-full text-sm">No Contacts Found</div>
        @endforelse

    </div>
</div>
