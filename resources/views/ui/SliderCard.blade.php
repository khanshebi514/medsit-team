@props(['title' => 'This is Title', 'description' => 'this is description for our card', 'iconUrl' => ''])
<!-- <div class="rounded-lg shadow-lg w-full h-[400px] text-left p-6">
    <div class="flex justify-start gap-2">
        <div class="flex items-center mb-4">
            
        </div>
        <div>
            <h3 class="ml-4 font-bold text-lg">{{$title}}</h3>
        </div>
    </div>

    <div class="mt-2 px-5">
        <p class="text-gray-700 text-sm">
            {{$description}}
        </p>
    </div>
</div> -->

<div class="w-[300px] sm:w-[350px] md:w-[380px] h-[380px] " style="background-image: url('{{ asset('images/slider/Subtract.png') }}');background-size: 100% 100%;;background-repeat:no-repeat">
    <div class="relative">
        <div
            class="bg-white drop-shadow rounded-xl w-[50px] h-[60px] sm:w-[55px] md:w-[60px] sm:h-[60px] flex justify-center items-center border-[1px] border-primary absolute -left-1 top-1">
            <img src="{{Vite::asset($iconUrl)}}" alt="" class="">
        </div>

        <div class="w-full relative overflow-hidden" >
           
            <div class="w-full p-5 top-0 left-0">
                <div>
                    <h3 class="ml-14 md:ml-12 font-bold text-lg">{{$title}}</h3>
                </div>
                <div class="mt-2 px-5">
                    <p class="text-gray-700 text-sm">
                        {{$description}}
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>