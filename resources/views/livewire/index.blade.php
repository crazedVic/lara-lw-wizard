<div class="w-full">
    <button onclick="window.location='{{ url("insurance/add") }}'">New Policy Wizard</button>
    <div class="w-full pl-5 pt-3">
        @forelse($policies as $policy)
            <div class="cursor-pointer mb-2 hover:bg-green-100">
                <a class="w-full" href="{{url('/insurance', $policy)}}"> {{$policy->brokerage}}</a>
                </div>
        @empty
            No Policies found.
        @endforelse
    </div>
</div>
