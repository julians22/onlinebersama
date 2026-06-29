<div class="grid grid-flow-row gap-8 md:grid-flow-col">
    <div x-data class="relative rounded-[10px] overflow-hidden h-68.75 md:w-96">
        <img class="size-full object-cover" src="{{ asset($image) }}" alt="{{ $alt }}">
    </div>
    <div class="flex flex-col gap-6">
        <p class="leading-7 text-deep-blue-300">
            {{ $slot }}
        </p>
        <a
            href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.default'), 'slug' => $slug]) }}"
            class="w-max flex items-center font-sans text-lg font-bold text-magenta-300 leading-6 md:text-xl">
            Baca Selengkapnya
            <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
        </a>
    </div>
</div>
