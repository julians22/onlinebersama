<div class="box-shadow-sm flex gap-4 rounded-[10px] bg-white p-4 relative overflow-hidden flex-col md:gap-8 md:flex-row">
    <div class="overlay-dark absolute inset-0 bg-deep-blue-300 opacity-0 z-10"></div>
    <div class="flex flex-col gap-4 md:pl-4">
        {{-- Head --}}
        <div class="flex items-center-safe text-deep-blue-300 gap-4">
            <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-extrabold text-navy-blue-300 text-[28px]">{{ $number }}</div>
            <h3 class="subheadline-3">{{ $title }}</h3>
        </div>
        {{-- Body/Content --}}
        <p class="paragraph-md text-deep-blue-300 md:leading-8.5!">{{ $slot }}</p>
    </div>
    {{-- Image --}}
    <div class="shrink-0 rounded-[10px] overflow-hidden">
        <img class="w-full aspect-square md:size-75" src="{{ asset($image) }}" alt="{{ $alt }}">
    </div>
</div>
