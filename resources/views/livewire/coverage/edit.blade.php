<div>
    Coverage - Edit {{$parentId}}
    <form>
        <label>
            <input type="text" class="w-full" wire:model="name" name="name" placeholder="name">
        </label>
        <label>
            <input type="text" class="w-full" wire:model="limit" name="limit" placeholder="limit">
        </label>
        <label>
            <input type="text" class="w-full" wire:model="deductible_amount"
                   name="deductible_amount" placeholder="deductible_amount">
        </label>
        <label class="flex justify-left items-center w-full space-x-3">
            <input type="checkbox" class="text-lg mr-2"  wire:model="deductible">Deductible
        </label>
        <label>
            <textarea rows="4" class="w-full" wire:model="notes" name="notes" placeholder="notes"></textarea>
        </label>
        @if(!$embedded)
                    <div class="text-right w-full">
                    <button type="button">Save Contact</button>
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
