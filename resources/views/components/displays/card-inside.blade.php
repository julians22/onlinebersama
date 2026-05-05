<div class="relative box-shadow-md rounded-[10px] overflow-hidden">
    <img class="aspect-208/223 object-cover w-full h-111.5" src="{{ asset($image) }}" alt="{{ $alt }}">
    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-6">
        <div class="text-white">
            <p class="paragraph-md leading-8.5! md:text-[18px]!">.com untuk</p>
            <h3 class="subheadline-3 md:text-[26px]!">{{ $slot }}</h3>
        </div>
        <div class="flex justify-start">
            <a href="{{ route($route) }}" class="btn-primary font-bold text-lg py-3 px-10">Pelajari Selengkapnya</a>
        </div>
    </div>
</div>
