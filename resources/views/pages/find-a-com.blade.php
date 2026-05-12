@extends('app')

@section('title', 'Find a .com')

@section('content')

<main>
    <section class="bg-deep-blue-300">
        <div class="flex flex-col items-center gap-8 py-40 text-white text-center container">
            <div class="space-y-2.5">
                <h1 class="headline-1">Temukan Nama Domain .com</h1>
                <p class="max-w-250 paragraph-md">Nama domain .com membantu pelanggan menemukan dan memercayai Anda. Temukan nama domain .com yang menarik menggunakan generator nama domain kami.</p>
            </div>
            <div class="shrink-0">
                <img src="{{ asset('images/ns-search.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="flex justify-center items-center gap-12 py-20 container">
        <button type="button" class="group relative w-150 rounded-[10px] bg-red-500 cursor-pointer overflow-hidden">
            <img class="size-full" src="{{ asset('images/placeholder-video-find.jpg') }}" alt="">
            <img class="transition-all duration-150 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 size-19.5 group-hover:scale-110" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
        </button>
        <h2 class="max-w-125 text-navy-blue-300 headline-2">Tiga Tip Memilih Nama Domain .com</h2>
    </section>
    <section class="bg-light-gray-100">
        <div class="flex flex-col gap-10 pt-10 pb-19.5 container">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-3">
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Media Sosial dan <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Situs Web</x-displays.card-inside>
            </div>
        </div>
    </section>
</main>

@endsection
