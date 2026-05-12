<div class="relative box-shadow-md rounded-[10px] overflow-hidden">
    <img class="aspect-208/223 object-cover w-full h-71.25 md:h-111.5" src="{{ asset($image) }}" alt="{{ $alt }}">
    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-4 md:p-6">
        <div class="text-white">
            <p class="paragraph-md leading-7! text-[18px]! md:text-[24px]!">.com untuk</p>
            <h3 class="subheadline-3 leading-6.25! text-[20px]! md:text-[40px]! md:leading-11.5!">{{ $slot }}</h3>
        </div>
        <div id="card-grow-action" :class="active === '{{ $active }}' ? 'xl:translate-y-0! xl:opacity-100!' : 'xl:translate-y-20! xl:opacity-0!'">
            <a href="{{ route($route) }}" class="btn-primary font-bold text-lg py-3 sm:max-w-55.75">Pelajari Selengkapnya</a>
        </div>
    </div>
</div>
