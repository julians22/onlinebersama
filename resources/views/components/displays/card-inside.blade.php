<div
    data-analytics-level3=".com for {{ $dataAnalytics }}"
    class="relative box-shadow-md rounded-[10px] overflow-hidden">
    <a href="{{ route($route) }}">
        <img @class([
            'h-71.35 md:h-111.5' => !in_array(Route::currentRouteName(), ['email', 'social-media', 'websites']),
            'h-111.5' => in_array(Route::currentRouteName(), ['email', 'social-media', 'websites']),
            'aspect-208/223 object-cover w-full'
        ]) src="{{ asset($image) }}" alt="{{ $alt }}">
        <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-4 md:p-6">
            <div data-analytics-name="text | .com for {{ $dataAnalytics }}" class="text-white">
                <p class="paragraph-md leading-7! text-[18px]! md:text-[24px]!">.com untuk</p>
                <h3 @class([
                    'text-[20px]! leading-6.25!' => !in_array(Route::currentRouteName(), ['email', 'social-media', 'websites']),
                    'text-[26px]!' => in_array(Route::currentRouteName(), ['email', 'social-media', 'websites']),
                    'subheadline-3 md:text-[32px]! md:leading-10!'
                ])>{{ $slot }}</h3>
            </div>
            <div class="card-action">
                <span
                    data-analytics-name="button | Learn More"
                    class="btn-primary">
                    Pelajari Selengkapnya
                </span>
            </div>
        </div>
    </a>
</div>
