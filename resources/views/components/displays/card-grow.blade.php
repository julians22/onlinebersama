<div class="relative box-shadow-md rounded-[10px] overflow-hidden">
    <img class="aspect-208/223 object-cover w-full h-71.25 md:h-111.5" src="{{ asset($image) }}" alt="{{ $alt }}">
    <div class="absolute top-0 left-0 flex flex-col justify-between size-full py-2.5 px-3 sm:p-4 md:p-6">
        <div class="text-white">
            <p class="paragraph-md leading-5! text-[16px]! md:leading-7! md:text-[18px]!">.com untuk</p>
            <h3 data-analytics-name="text | {{ $dataAnalytics }}" class="subheadline-3 font-bold! leading-6.25! text-[20px]! md:text-[32px]! md:leading-10!">{{ $slot }}</h3>
        </div>
        <div class="card-action" :class="active === '{{ $active }}' ? 'xl:translate-y-0! xl:opacity-100!' : 'xl:translate-y-20! xl:opacity-0!'">
            <a
                data-analytics-name="button | Learn More"
                href="{{ route($route) }}"
                class="btn-primary px-3! sm:px-10!">
                Pelajari Selengkapnya
            </a>
        </div>
    </div>
</div>
