<article class="flex flex-col gap-y-4 rounded-[10px] bg-white h-full p-4 box-shadow-sm">
    <figure class="rounded-lg overflow-hidden">
        <img class="aspect-8/5 size-full object-cover" src="{{ asset($image ?? 'images/placeholder-resources-card.jpg') }}" alt="{{ $alt }}">
    </figure>
    <div class="flex flex-col gap-y-4">
        <div class="flex flex-wrap gap-2.5">
            @if(Route::currentRouteName() !== 'resources.show')
                {{-- @foreach($tags as $tag) --}}
                    <span class="font-sans text-sm bg-mint-200 text-deep-blue-300 font-semibold rounded-[5px] px-2 py-1">Situs Web</span>
                {{-- @endforeach --}}
            @endif
        </div>
        <div class="min-h-28.5">
            <h2 class="subheadline-3 text-deep-blue-300 line-clamp-3">{{ $slot }}</h2>
        </div>
        <a href="{{ $route }}" class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
            Baca Selengkapnya
            <img src="{{ asset('images/icons/magenta-chevron-right.svg') }}" alt="">
        </a>
    </div>
</article>
