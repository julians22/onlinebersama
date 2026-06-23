<article data-analytics-name="box | {{ $dataAnalytics }}" class="rounded-[10px] bg-white h-full box-shadow-sm">
    <a href="{{ $route }}" class="flex flex-col gap-y-4 p-4">
        <figure class="rounded-lg overflow-hidden">
            <img class="aspect-8/5 size-full object-cover" src="{{ $image ? imageArticle($image) : ''  }}" alt="{{ $alt }}">
        </figure>
        <div class="flex flex-col gap-y-4">
            {{-- Todo fix --}}
            @if(is_array($tags))
                <div class="flex flex-wrap gap-2.5 min-h-7">
                    @foreach($tags as $tag)
                        <span class="font-sans text-sm bg-mint-200 text-deep-blue-300 font-semibold rounded-[5px] px-2 py-1">{{ $tag }}</span>
                    @endforeach
                </div>
            @endif
            <div class="min-h-28.5">
                <h2 class="subheadline-3 text-deep-blue-300 line-clamp-3 text-[26px]! md:text-[28px]!">{{ $slot }}</h2>
            </div>
            <span
                data-analytics-name="text | Read More"
                href="{{ $route }}"
                class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
                Baca Selengkapnya
                <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
            </span>
        </div>
    </a>
</article>
