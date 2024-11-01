@props(['type' => 'text', 'placeholder' => 'text', 'name' => 'name', 'width' => null])

<input 
    class="border outline-none bg-white text-primary-text px-2 py-2 {{ $width=='full' ? 'w-full rounded-md' : 'w-[183px]' }}"
    type="{{ $type }}"
    placeholder="{{ $placeholder }}" 
    name="{{ $name }}" 
/>