<div>
    Policy Edit
    <form>
        <label>
            <input type="text" class="w-full" name="brokerage" wire:model="brokerage" placeholder="brokerage" wire:key>
        </label>
        <label>
            <input type="text" class="w-full" name="day" wire:model="day" placeholder="day">
        </label>
        <label>
            <input type="text" class="w-full" name="month" wire:model="month" placeholder="month">
        </label>
        <label>
            <input type="text" class="w-full" name="annual_premium" wire:model="annual_premium" placeholder="annual_premium" >
        </label>
        <label>
            <input type="text" class="w-full" name="schedule" wire:model="payment_schedule" placeholder="payment schedule">
        </label>
        @if(!$embedded)
            <div class="text-right w-full">
                <button type="button">Save</button>
                <button type="button" class="!bg-gray-400">Cancel</button>
            </div>
        @endif
        @if($errors->any())
            <div class="p-1 md:px-2 text-xxs border border-gray-800">
                <div>
                    @foreach ($errors->all() as $error)
                        <div class="text-xs italic text-red-500">{{$error}}</div>
                    @endforeach
                </div>
            </div>
        @endif
    </form>
</div>
