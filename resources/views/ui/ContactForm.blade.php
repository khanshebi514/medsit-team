<div class="w-full md:w-[80%] bg-white drop-shadow rounded-lg p-5 md:p-10">
    <h2 class="text-2xl font-bold text-center py-3">Book a Free consultant</h2>
    <form class="mt-3">
        <div class="space-y-3">
            @include('ui.Input', ['type' => 'text', 'placeholder' => 'Name', 'name' => 'full_name', 'width' => 'full'])
            @include('ui.Input', ['type' => 'number', 'placeholder' => 'Phone', 'name' => 'phone', 'width' => 'full'])
            @include('ui.Input', ['type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'width' => 'full'])
        </div>
        <div class="flex items-center gap-5 mt-4">
            @include('ui.Input', ['type' => 'number', 'placeholder' => 'Phone', 'name' => 'phone', 'width' => 'full'])
            @include('ui.Input', ['type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'width' => 'full'])
        </div>
        <div class="mt-3">
            <textarea name="message"
                class="border outline-none bg-white text-black py-2 px-4 w-full rounded-md placeholder:text-gray-400"
                placeholder="Write Your Message">
</textarea>

        </div>

        <div class="flex justify-center items-center gap-3 mt-3">
            <button type="submit" class="bg-pink-web text-white w-full text-center py-3 hover:bg-primary transition-all duration-300 rounded-md">
                Submit
            </button>
        </div>
    </form>
</div>