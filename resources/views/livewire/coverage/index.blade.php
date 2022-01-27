<div>
    Coverages
    <div class="ml-4 border-l-2 border-green-500 p-2">
        @forelse($coverages as $coverage)
            <div class="w-full text-sm">{{$coverage->name}}</div>
        @empty
            <div class="w-full text-sm">No Coverages Found</div>
        @endforelse
    </div>
</div>
