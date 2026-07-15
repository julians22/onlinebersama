<div data-analytics-level2="Related Article" {{ $attributes }}>
    <h4 class="py-4 text-[24px]! leading-7.5! md:text-[26px]!">Artikel Terkait</h4>
    <div data-analytics-level3="{{ $data->data_analytics ?? $data->title }}">
        <div data-analytics-name="box | {{ $data->data_analytics ?? $data->title }}" class="flex flex-col-reverse justify-between gap-4 p-4 rounded-[10px] box-shadow-sm sm:gap-8 sm:flex-row">
            <div class="flex flex-col justify-between space-y-4 sm:space-y-0 sm:pl-4">
                <x-displays.clickable :as="$as" data-analytics-name="text | {{ $data->data_analytics }}" {{ $attributes->except('class')->merge($extra_attributes) }}>
                    <h3 class="related-title">{{ $data->title }}</h3>
                </x-displays.clickable>
                <x-displays.clickable :as="$as" {{ $attributes->except('class')->merge($extra_attributes) }}
                    data-analytics-name="text | {{ $data_analytics_button }}"
                    class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6">
                    {{ $text_button }}
                    <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
                </x-displays.clickable>
            </div>
            <div class="shrink-0 aspect-video h-52.5 rounded-[10px] overflow-hidden min-[500px]:h-65 sm:size-75 sm:aspect-square">
                <x-displays.clickable :as="$as" data-analytics-name="image | {{ $data->data_analytics }}" {{ $attributes->except('class')->merge($extra_attributes) }}>
                    <img class="size-full object-cover hidden sm:block" src="{{ imageArticle($data->thumbnail_related_file_name) }}" alt="">
                    <img class="size-full object-cover block sm:hidden" src="{{ imageArticle($data->thumbnail_file_name) }}" alt="">
                </x-displays.clickable>
            </div>
        </div>
    </div>
</div>
