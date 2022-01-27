<div>
    Contact - Edit
    <form>
        <label>
            <input type="text" class="w-full" name="name" placeholder="name">
        </label>
        <label>
            <input type="text" class="w-full" name="email" placeholder="email">
        </label>
        <label>
            <input type="text" class="w-full" name="phone" placeholder="phone" >
        </label>
        @if(!$embedded)
            <div class="text-right w-full">
                <button type="button">Save Contact</button>
                <button type="button" class="!bg-gray-400">Cancel</button>
            </div>
        @endif
    </form>
</div>
