<div>
    Contact - Edit {{$parentId}}
    <form>
        <label>
            <input type="text" class="w-full" wire:model="name" name="name" placeholder="name">
        </label>
        <label>
            <input type="text" class="w-full" wire:model="email" name="email" placeholder="email">
        </label>
        <label>
            <input type="text" class="w-full" wire:model="phone" name="phone" placeholder="phone" >
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
