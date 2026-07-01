<div class="box-shadow-sm flex gap-4 rounded-[10px] bg-white p-4 relative overflow-hidden flex-col md:gap-8 md:flex-row">
    <div class="overlay-dark absolute inset-0 bg-deep-blue-300 opacity-0 z-10"></div>
    <div
        @if ($dataAnalytics) data-analytics-name="text | {{ $dataAnalytics }}" @endif
        class="flex flex-col gap-2.5 md:gap-4 md:pl-4">
        {{-- Head --}}
        <div class="flex items-center-safe text-deep-blue-300 gap-3 min-h-15 md:min-h-auto">
            <div class="shrink-0 flex justify-center items-center size-11.25 rounded-full border-4 border-mint-300 font-extrabold text-navy-blue-300 text-[26px]">{{ $number }}</div>
            <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">{{ $title }}</h3>
        </div>
        {{-- Body/Content --}}
        <div class="paragraph-md text-deep-blue-300 md:leading-7.5!">{{ $slot }}</div>
    </div>
    {{-- Image --}}
    <div class="shrink-0 rounded-[10px] overflow-hidden">
        <img class="w-full aspect-square md:size-75" src="{{ asset($image) }}" alt="{{ $alt }}">
    </div>
</div>
