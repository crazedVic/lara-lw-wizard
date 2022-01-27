<div>
    Policy Edit
    <form>
        <label>
            <input type="text" class="w-full" name="brokerage" placeholder="brokerage">
        </label>
        <label>
            <input type="text" class="w-full" name="month" placeholder="month">
        </label>
        <label>
            <input type="text" class="w-full" name="annual_premium" placeholder="annual_premium" >
        </label>
        <label>
            <input type="text" class="w-full" name="schedule" placeholder="payment schedule">
        </label>
        <label>
            <input type="text" class="w-full" name="day" placeholder="day">
        </label>
        @if(!$embedded)
            <div class="text-right w-full">
                <button type="button">Save</button>
                <button type="button" class="!bg-gray-400">Cancel</button>
            </div>
        @endif
    </form>
</div>
