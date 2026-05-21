@props(['header'])

<div class="grid grid-rows-subgrid row-span-2 w-51 text-center rounded-[10px] overflow-hidden">
    <div class="flex items-center justify-center bg-deep-blue-300 p-4">
        <p class="paragraph-sm text-white">{{ $header }}</p>
    </div>
    <div class="text-center bg-mint-100 h-full px-2.5 pt-4 pb-10.5">
        <p {{ $attributes->merge(['class' => 'paragraph-sm text-navy-blue-300']) }}>
            {{ $slot }}
        </p>
    </div>
</div>

