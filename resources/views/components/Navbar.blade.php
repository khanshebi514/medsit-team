<header class="bg-white h-[74px] p-2">
    <div class="container grid grid-cols-2 lg:grid-cols-3 place-items-center gap-2">
        <div class="justify-self-start">
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.png')}}" alt="logo" class="w-[120px] md:w-[150px]"/>
            </a>
        </div>
        <div class="justify-self-center hidden xl:block">
            @include('ui.Navitem')
        </div>
        <div class="justify-self-end">
            <a href="/" class="bg-primary px-2 py-2 md:px-10 text-white rounded-md text-nowrap">Billing Calculator</a>
        </div>
    </div>
</header>