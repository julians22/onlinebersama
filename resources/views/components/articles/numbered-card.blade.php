@props([
    'number' => 0
])

<div
    {{ $attributes->merge(['class' => 'px-6 bg-light-gray-100 gap-2 rounded-[10px] h-[152px] flex items-center']) }}>

    <div class="shrink-0 flex justify-center items-center size-10 rounded-full border-4 border-magenta-300 font-extrabold text-navy-blue-300 text-[28px]">
        {{ $number }}
    </div>

    <div class="trim-both edge-cap">
        {{ $slot }}
    </div>

</div>
