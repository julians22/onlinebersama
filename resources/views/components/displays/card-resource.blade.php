<div x-data class="flex flex-col gap-y-4 p-4 rounded-[10px] bg-white h-full box-shadow-sm">
    <x-displays.clickable :as="$as" {{ $attributes->merge($extra_attributes) }} class="group relative block cursor-pointer rounded-lg overflow-hidden">
        <figure @if($data->type !== 'video') data-analytics-name="image | {{ $data->data_analytics }}" @endif>
            <img class="aspect-video size-full object-cover" src="{{ $data->thumbnail_file_name ? imageArticle($data->thumbnail_file_name) : '' }}" alt="{{ $alt }}">
            @if($data->type === 'video')
                <div data-analytics-name="video image | {{ $data->data_analytics }}" class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <span data-analytics-name="play button | {{ $data->data_analytics }}" class="transition-all duration-300 ease-in-out cursor-pointer top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" class="size-18" />
                </span>
            @endif
        </figure>
    </x-displays.clickable>
    <div class="flex flex-col gap-y-4">
        @if($hideTag)
            <div class="flex flex-wrap gap-2.5 min-h-7">
                <span class="font-sans text-sm bg-mint-200 text-deep-blue-300 font-semibold rounded-[5px] px-2 py-1">{{ $rendered_tag }}</span>
            </div>
        @endif
        <div class="h-28.5">
            <x-displays.clickable :as="$as" data-analytics-name="text | {{ $data->data_analytics }}" {{ $attributes->merge($extra_attributes) }} class="text-left cursor-pointer">
                <h2 class="subheadline-3 text-deep-blue-300 line-clamp-3 text-[24px]! leading-7.5! md:text-[26px]!">{{ $slot }}</h2>
            </x-displays.clickable>
        </div>
        <x-displays.clickable :as="$as" {{ $attributes->merge($extra_attributes) }}
            data-analytics-name="text | {{ $data_analytics_button }}"
            class="w-max flex items-center font-sans text-xl font-bold text-magenta-300 leading-6 cursor-pointer">
            {{ $text_button }}
            <x-icons.arrow-rounded width="24" height="24" fill="#A7127E" class="size-4.5 ml-1" strokeWidth="1" />
        </x-displays.clickable>
    </div>
</div>
