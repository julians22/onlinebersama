<article data-analytics-name="box | {{ $dataAnalytics }}" class="flex flex-col gap-y-4 p-4 rounded-[10px] bg-white h-full box-shadow-sm">
    <figure class="rounded-lg overflow-hidden">
        <a href="{{ $route }}">
            <img class="aspect-8/5 size-full object-cover" src="{{ $image ? imageArticle($image) : ''  }}" alt="{{ $alt }}">
        </a>
    </figure>
    <div class="flex flex-col gap-y-4">
        <div class="flex flex-wrap gap-2.5 min-h-7">
            <span class="font-sans text-sm bg-mint-200 text-deep-blue-300 font-semibold rounded-[5px] px-2 py-1">{{ $rendered_tag }}</span>
        </div>
        <div class="min-h-28.5">
            <a href="{{ $route }}">
                <h2 class="subheadline-3 text-deep-blue-300 line-clamp-3 text-[26px]! md:text-[28px]!">{{ $slot }}</h2>
            </a>
        </div>
        <a
            data-analytics-name="text | Read More"
            href="{{ $route }}"
            class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
            Baca Selengkapnya
            <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
        </a>
    </div>
</article>
