@props(['data'])

<div data-analytics-level2="Related Article" {{ $attributes }}>
    <h4 class="py-4">Artikel Terkait</h4>
    <div data-analytics-level3="{{ $data->data_analytics ?? $data->title }}">
        <div data-analytics-name="box | {{ $data->data_analytics ?? $data->title }}" class="flex flex-col-reverse justify-between gap-4 p-4 rounded-[10px] box-shadow-sm sm:gap-8 sm:flex-row">
            <div class="flex flex-col justify-between space-y-4 sm:space-y-0 sm:pl-4">
                <h3 class="related-title">{{ $data->title }}</h3>
                <a
                    data-analytics-name="text | Read More"
                    href="{{ route('resources.handle_second_route', $data->route_tools) }}"
                    class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
                    Baca Selengkapnya
                    <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
                </a>
            </div>
            <div class="shrink-0 aspect-video h-52.5 rounded-[10px] overflow-hidden min-[500px]:h-65 sm:size-75 sm:aspect-square">
                <img class="size-full object-cover" src="{{ imageArticle($data->thumbnail_file_name) }}" alt="">
            </div>
        </div>
    </div>
</div>
