<div>
    @if($embedded)<div class="text-center">New Contact</div>@else Contact Edit @endif
    <form class="pr-2">
        <label>
            <div class="fieldLabel">Name</div>
            <input type="text" class="w-full"
                   wire:model="name" name="name" placeholder="Full Name">
        </label>
        <label>
            <div class="fieldLabel">Email Address</div>
            <input type="text" class="w-full"
                   wire:model="email" name="email" placeholder="name@domain.com">
        </label>
        <label>
            <div class="fieldLabel">Phone Number</div>
            <input type="text" class="w-full"
                   wire:model="phone" name="phone" placeholder="(XXX) XXX-XXXX" >
        </label>
        @if(!$embedded)
            <div class="text-right w-full">
                <button type="button">Save Contact</button>
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
