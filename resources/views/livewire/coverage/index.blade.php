<div>
    Coverages
    @if(!$embedded)
        <div class="ml-4 border-l-2 border-green-500 p-2">
    @else
        <div class="text-xs border-t border-green-500 w-3/4">
    @endif
        @forelse($coverages as $coverage)
            <div class="w-full text-sm pl-2">{{$coverage->name}}</div>
        @empty
            <div class="w-full text-sm text-gray-400">No Coverages Found</div>
        @endforelse
    </div>
</div>
