<div>
    Policy Details
    @if(!$embedded)
        <div class="ml-4 border-l-2 border-green-500 p-2 text-sm">
    @else
        <div class="text-xs border-t border-green-500 w-3/4">
    @endif
        <div class="w-full pl-2">{{$policy->brokerage}}</div>
        <div class="w-full pl-2">Policy Date {{$policy->month}} {{$policy->day}}</div>
        <div class="w-full pl-2">Annual Premium ${{$policy->annual_premium}}</div>
        <div class="w-full pl-2">Payments {{$policy->payment_schedule}}</div>
    </div>
</div>
