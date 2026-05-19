<div {{ $attributes->merge(['class' => 'space-y-2.5 gap-2 flex items-start content-start flex-wrap']) }}>

    <div class="flex size-10 p-[2.857px] justify-center items-center">
        <div class="shrink-0 flex justify-center items-center size-10 rounded-full border-4 border-mint-300 font-extrabold text-navy-blue-300 text-[28px]">
            {{ $number }}
        </div>
    </div>

    {{ $slot }}

</div>
