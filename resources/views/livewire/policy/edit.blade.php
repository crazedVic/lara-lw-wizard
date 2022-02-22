<div>
    @if($embedded)<div class="text-center">New Policy</div>@else Policy Edit @endif
    <form class="pr-2">
        <label>
            <div class="fieldLabel py-0">Brokerage Name</div>
            <input type="text" name="brokerage"
                   wire:model="brokerage" placeholder="Brokerage Name" wire:key>
        </label>
        <label>
            <div class="fieldLabel">Renewal Day</div>
            <input type="text" name="day"
                   wire:model="day" placeholder="31">
        </label>
        <label>
            <div class="fieldLabel">Renewal Month</div>
            <input type="text"  name="month"
                   wire:model="month" placeholder="12">
        </label>
        <label>
            <div class="fieldLabel">Annual Premium</div>
            <input type="text"  name="annual_premium"
                   wire:model="annual_premium" placeholder="Annual Premium ($)" >
        </label>
        <label>
            <div class="fieldLabel">Payment Schedule ($)</div>
            <input type="text" class="w-full" name="schedule"
                   wire:model="payment_schedule" placeholder="Annual or Monthly">
        </label>
        @if(!$embedded)
            <div class="text-right w-full">
                <butto wire:click="save()" type="button">Save</button>
                <button wire:click="cancel()" type="button" class="!bg-gray-400">Cancel</button>
            </div>
        @endif
        @if($errors->any())
            <div class="errorSummary">
                @foreach ($errors->all() as $error)
                    <div class="text-xs italic text-red-500">{{$error}}</div>
                @endforeach
            </div>
        @endif
    </form>
</div>
