<div>
    <button onclick="window.location='{{ url("insurance/add") }}'">New Policy Wizard</button>
    @forelse($policies as $policy)
        <div>{{$policy->brokerage}}</div>
    @empty
        No Policies found.
        @endforelse
</div>
