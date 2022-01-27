<div>
    <button onclick="window.location='{{ url("insurance/add") }}'">New Policy Wizard</button>
    @forelse($policies as $policy)
        <div><a href="{{url('/insurance', $policy)}}"> {{$policy->brokerage}}</a</div>
    @empty
        No Policies found.
        @endforelse
</div>
