@props(['title' => 'Hospital2', 'description' => 'this is Description', 'bg_color' => '2752', 'iconUrl' => 'resources/images/hospital-1.png'])

<div class="group cursor-pointer overflow-hidden relative h-[250px] p-5 space-y-5 rounded-lg transition-all duration-500 transform hover:scale-110" style="background-color: #{{$bg_color}}20">
    <h3 class="heading" style="color: #{{$bg_color}}">{{$title}}</h3>

    
    <div class="hidden group-hover:block text-black">
        <p class="textPara" style="color: #{{$bg_color}}">{{$description}}</p>
    </div>

   
    <button class="min-w-[50px] min-h-[25px] rounded-3xl group-hover:rounded-md border p-1 text-gray-600 flex justify-center items-center" style="border-color: #{{$bg_color}}">
        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="color: #{{$bg_color}}">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
        </svg>
        <span class="hidden group-hover:block" style="color: #{{$bg_color}}">Learn More</span>
    </button>

   
    <img src="{{ Vite::asset($iconUrl) }}" alt="Hospital Image" class="static group-hover:flex group-hover:absolute top-[50%] right-[2%] w-[100px] h-[100px] rounded-md transition duration-300 ease-in-out group-hover:rotate-45 group-hover:scale-115">
</div>