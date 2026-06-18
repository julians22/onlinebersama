@extends('app')

@section('title', 'Temukan dan Tukar Pikiran Ide Nama Domain .com yang Tersedia')

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-deep-blue-300 py-16 md:py-25 lg:py-40">
        <div class="flex flex-col items-center gap-8 text-white text-center container">
            <div class="space-y-2.5 md:max-w-175 lg:max-w-full">
                <h1 class="headline-1">Temukan Nama Domain .com</h1>
                <p class="max-w-250 paragraph-md">Nama domain .com membantu pelanggan menemukan dan memercayai Anda. Temukan nama domain .com yang menarik menggunakan generator nama domain kami.</p>
            </div>
        </div>
        <div>
            <x-displays.namestudio/>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Three Tips --}}
    <section
        x-data
        data-analytics-level2="Three Tips For Choosing a .com Domain Name"
        class="flex justify-center items-center gap-6 py-10 container flex-col-reverse md:py-20 lg:gap-12 lg:flex-row">
        <button
            data-analytics-name="video animation | Three Tips For Choosing a .com Domain Name"
            type="button"
            @click="$store.videoModal.openModal('6331201181112')"
            class="group relative aspect-video rounded-[10px] cursor-pointer overflow-hidden max-w-lg md:w-150">
            <img class="size-full" src="{{ asset('images/placeholder-video-find.jpg') }}" alt="">
            <span data-analytics-name="play button | Three Tips For Choosing a .com Domain Name" class="transition-all duration-150 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 size-19.5 group-hover:scale-110">
                <x-icons.play-rounded width="78" height="78" fill="#fff" />
            </span>
        </button>
        <h2 class="text-navy-blue-300 headline-1 text-center md:text-[48px]! md:leading-15.5! lg:text-left lg:max-w-125">Tiga Tip Memilih Nama Domain .com</h2>
    </section>
    {{-- End Three Tips --}}

    {{-- How to Use --}}
    <section
        data-analytics-level2="How Do I Use a .com?"
        class="bg-light-gray-100 overflow-hidden!">
        <div class="container py-10 px-0 md:pt-10 md:pb-19.5 xl:px-8">
            <h2 class="text-navy-blue-300 text-center -mb-6 px-4 headline-1 md:-mb-2 md:px-8">Bagaimana Cara Saya Menggunakan .com?</h2>
            <div class="online-bersama-how-to-use swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <x-displays.card-inside
                            data-analytics="Email"
                            route="email"
                            image="images/brand-1.jpg">
                            Email
                        </x-displays.card-inside>
                    </div>
                    <div class="swiper-slide">
                        <x-displays.card-inside
                            data-analytics="Social Media & E-Commerce"
                            route="social-media"
                            image="images/brand-2.jpg">
                            Media Sosial dan <span class="block">E-Commerce</span>
                        </x-displays.card-inside>
                    </div>
                    <div class="swiper-slide">
                        <x-displays.card-inside
                            data-analytics="Websites"
                            route="websites"
                            image="images/brand-3.jpg">
                            Situs Web
                        </x-displays.card-inside>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    {{-- End How to Use --}}
</main>

@endsection
