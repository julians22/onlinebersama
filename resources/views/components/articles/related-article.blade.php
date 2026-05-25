@props(['data'])

<div class="pt-4">
    <h4 class="py-4">Artikel Terkait</h4>
    <div class="flex flex-col-reverse justify-between gap-4 p-4 rounded-[10px] box-shadow-sm sm:gap-8 sm:flex-row">
        <div class="flex flex-col justify-between space-y-4 sm:space-y-0 sm:pl-4">
            <h3 class="smaller leading-7.5!">{{ $data->title }}</h3>
            <a href="{{ route('resources.show', $data->slug) }}" class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
                Baca Selengkapnya
                <img src="{{ asset('images/icons/magenta-chevron-right.svg') }}" alt="">
            </a>
        </div>
        <div class="shrink-0 aspect-video h-52.5 rounded-[10px] overflow-hidden min-[500px]:h-65 sm:size-75 sm:aspect-square">
            <img class="size-full object-cover" src="{{ imageArticle($data->slug) }}" alt="">
        </div>
    </div>
</div>
