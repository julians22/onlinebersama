<div {{ $attributes->merge(['class' => 'space-y-2.5 gap-3.5 flex items-start content-start flex-wrap']) }}>
    <div class="flex size-10 p-[2.857px] justify-center items-center">
        <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px] mt-4">
            {{ $number }}
        </div>
    </div>
    {{ $slot }}
</div>
