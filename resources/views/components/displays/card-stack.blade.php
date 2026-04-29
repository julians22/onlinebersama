<div class="box-shadow-sm flex gap-8 rounded-[10px] bg-white p-4">
    <div class="flex flex-col gap-4 pl-4">
        {{-- Head --}}
        <div class="flex items-center-safe text-deep-blue-300 gap-4">
            <div class="flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-extrabold text-navy-blue-300 text-[28px]">{{ $number }}</div>
            <h3 class="subheadline-3">{{ $title }}</h3>
        </div>
        {{-- Body/Content --}}
        <p class="paragraph-md text-deep-blue-300 leading-8.5!">{{ $slot }}</p>
    </div>
    {{-- Image --}}
    <div class="shrink-0 rounded-[10px] overflow-hidden">
        <img class="size-75" src="{{ asset($image) }}" alt="{{ $alt }}">
    </div>
</div>
