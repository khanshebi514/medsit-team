@props(['heading'=>'this is heading', 'description'=>'this is description', 'iconUrl'=>''])

<div class="w-full rounded-xl bg-white drop-shadow p-5 hover:border-l-2 border-primary">
<h1 class="text-[18px] font-[500] flex justify-between gap-3 items-center cursor-pointer" 
    onclick="this.nextElementSibling.classList.toggle('hidden'); 
             this.querySelector('svg').classList.toggle('-rotate-180'); 
             this.querySelector('span').classList.toggle('')">
    <span class="flex items-start gap-2">
        <img src="{{ Vite::asset($iconUrl) }}" alt="accordion icons" class="hidden sm:block"> 
        {{$heading}}
    </span>
    <span class="transform transition-transform p-1 bg-primary rounded-full text-white">
        <!-- Arrow Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg>
    </span>
</h1>
    <p class="text-[16px] font-[400] mt-3 hidden text-gray-600 ml-1 sm:ml-5">
       {{$description}}
    </p>
</div>

<script>
    
</script>