<div @mouseenter="active = '{{ $active }}'" :class="active === '{{ $active }}' ? 'basis-2/4!' : 'basis-1/4!'" @class([
    'basis-1/4' => $active !== 'social',
    'basis-2/4' => $active === 'social',
    'transition-all duration-500 ease-in-out relative box-shadow-md rounded-[10px] overflow-hidden'
])>
    <img class="aspect-208/223 object-cover w-full h-111.5" src="{{ asset($image) }}" alt="{{ $alt }}">
    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-6">
        <div class="text-white">
            <p class="paragraph-md leading-8.5! md:text-[18px]!">.com untuk</p>
            <h3 class="subheadline-3 md:text-[26px]!">{{ $slot }}</h3>
        </div>
        <div :class="active === '{{ $active }}' ? 'translate-y-0! opacity-100!' : 'translate-y-20! opacity-0!'" @class([
            'translate-y-20 opacity-0' => $active !== 'social',
            'translate-y-0 opacity-100' => $active === 'social',
            'transition-all duration-500 ease-in-out'
        ])>
            <a href="{{ route($route) }}" class="btn-primary font-bold max-w-55.75 text-lg py-3">Pelajari Selengkapnya</a>
        </div>
    </div>
</div>
