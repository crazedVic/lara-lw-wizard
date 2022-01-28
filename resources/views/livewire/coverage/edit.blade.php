<div>
    @if($embedded)<div class="text-center">New Coverage</div>@else Coverage Edit @endif
    <form class="pr-2">
        <label>
            <div class="fieldLabel">Name</div>
            <input type="text" class="w-full"
                   wire:model="name" name="name" placeholder="name">
        </label>
        <label>
            <div class="fieldLabel">Coverage Limit ($)</div>
            <input type="text" class="w-full"
                   wire:model="limit" name="limit" placeholder="$">
        </label>
        <div class="ml-2 flex flex-row items-center justify-start
            w-full whitespace-nowrap border border-gray-500 rounded
            mt-2 pl-2 text-gray-800">
            <input type="checkbox" class="h-4 w-4 accent-green-800 mr-2"
                   wire:model="deductible">NO Deductible
        </div>
        <label>
            <div class="fieldLabel">Deductible Amount ($)</div>
            <input type="text" class="w-full max-w-3xl"
                   wire:model="deductible_amount"
                   name="deductible_amount" placeholder="$">
        </label>

        <label>
            <div class="fieldLabel">Notes</div>
            <textarea rows="2" class="w-full"
                      wire:model="notes" name="notes"
                      placeholder="Add Notes here..."></textarea>
        </label>
        @if(!$embedded)
                    <div class="text-right w-full">
                        <button type="button">Save Coverage</button>
                        <button type="button" class="!bg-gray-400">Cancel</button>
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
