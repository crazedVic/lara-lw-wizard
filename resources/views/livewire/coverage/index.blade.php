<div>
    Coverages
    @if(!$embedded)
        <div class="ml-4 border-l-2 border-green-500 p-2 text-xs">
    @else
        <div class="text-xs border-t border-green-500 w-3/4 mb-2">
    @endif
            @forelse($coverages as $coverage)
                <div class="w-full pl-2 text-sm ">{{$coverage->name}}</div>
                <div class="w-full pl-4 text-gray-500">Limit of ${{$coverage->limit}}</div>
                <div class="w-full pl-4 text-gray-500">Deductible of ${{$coverage->deductible_amount}}</div>
                <div class="w-full pl-4 text-gray-500 italic">{{$coverage->notes}}</div>
            @empty
                <div class="w-full text-sm">No Coverages Found</div>
            @endforelse
    </div>
</div>
