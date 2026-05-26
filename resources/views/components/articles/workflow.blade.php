@props(['header'])

<div class="grid grid-rows-subgrid row-span-2 w-full text-center rounded-[10px] overflow-hidden lg:w-51">
    <div class="flex items-center justify-center bg-deep-blue-300 p-4">
        <p class="paragraph-sm text-white font-semibold!">{{ $header }}</p>
    </div>
    <div class="text-center bg-[#e0f2ec] h-full px-2.5 pt-4 pb-7.5 md:pb-10.5">
        <p {{ $attributes->merge(['class' => 'paragraph-sm text-navy-blue-300 font-semibold!']) }}>
            {{ $slot }}
        </p>
    </div>
</div>

