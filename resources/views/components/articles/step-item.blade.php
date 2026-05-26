<div {{ $attributes->merge(['class' => 'space-y-2.5 gap-3.5 flex items-start content-start flex-wrap']) }}>
    <div class="flex size-7.5 p-[2.857px] justify-center items-center md:size-10">
        <div class="shrink-0 flex justify-center items-center size-7.5 rounded-full border-4 border-mint-300 font-extrabold text-navy-blue-300 text-[16px] md:font-semibold md:size-12.5 md:mt-4 md:text-[32px]">
            {{ $number }}
        </div>
    </div>
    {{ $slot }}
</div>
