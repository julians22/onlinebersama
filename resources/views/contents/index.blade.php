@extends('app')

@section('title', 'Panduan Belajar | Nama Domain .com')
@section('meta_description', 'Temukan cara memaksimalkan penggunaan nama domain .com Anda melalui koleksi artikel, video, dan panduan kami')
@section('meta_keywords', 'panduan belajar .com, artikel .com')
@section('meta_image', asset('images/hero-resources.webp'))

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="relative">
        <img class="hidden w-full h-150 object-cover aspect-16/5 md:block" src="{{ asset('images/hero-resources.webp') }}" alt="">
        <img class="block w-full h-132.5 object-cover md:hidden" src="{{ asset('images/hero-resources-mobile.webp') }}" alt="">
        <div class="top-0 left-1/2 absolute flex items-end py-10 size-full -translate-x-1/2 container-medium md:items-center md:py-19.5">
            <div class="space-y-4 text-white">
                <h1 class="headline-1">Panduan Belajar</h1>
                <p class="max-w-162.5 paragraph-md">Temukan cara memaksimalkan nama domain .com Anda dengan kumpulan artikel, video, dan panduan kami.</p>
                <div class="flex justify-start">
                    <a
                        data-analytics-name="button | Explore All Resources"
                        href="#resources"
                        class="btn-secondary w-full sm:w-auto">
                        Lihat Semua Sumber Informasi
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Small Business Stories --}}
    <section
        data-analytics-level2="Small Business Stories"
        class="max-w-403 mx-auto py-10 md:py-12.5">
        <div class="space-y-3 text-center mb-6 px-4 md:mb-8 md:px-8 xl:px-0">
            <h2 class="headline-1 text-navy-blue-300">Kisah Usaha Kecil</h2>
            <p class="paragraph-md text-deep-blue-300 text-[18px]! md:text-[26px]!">Lihat bagaimana bisnis menggunakan nama domain .com untuk membantu mereka mencapai tujuan.</p>
        </div>
        <div class="online-bersama-small-business-story swiper relative">
            <div data-analytics-level3="carousel" class="custom-swiper-button-prev z-9999 absolute inset-y-0 left-0 w-1/4 cursor-pointer"></div>
            <div data-analytics-level3="carousel" class="custom-swiper-button-next z-9999 absolute inset-y-0 right-0 w-1/4 cursor-pointer"></div>
            <div class="swiper-wrapper">
                <div data-analytics-level3="carousel1" class="swiper-slide">
                    <x-displays.card-video title="Startup Experience" image="images/placeholder-video-startup.webp" videoId="{{ config('onlinebersama.video_id.startup_experience') }}" data-analytics="Startup Experience">
                        Ketahui bagaimana Henrik Scheel menggunakan nama domain .com miliknya untuk membantu bisnisnya beroperasi di 25 negara di seluruh dunia.
                    </x-displays.card-video>
                </div>
                <div data-analytics-level3="carousel2" class="swiper-slide">
                    <x-displays.card-video title="IKAT Indonesia" image="images/placeholder-video-ikat-indonesia.webp" videoId="{{ config('onlinebersama.video_id.ikat_indonesia') }}" data-analytics="IKAT Indonesia">
                        Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya
                    </x-displays.card-video>
                </div>
                <div data-analytics-level3="carousel3" class="swiper-slide">
                    <x-displays.card-video title="Chic Diva Geek" image="images/placeholder-video-chic-diva.webp" videoId="{{ config('onlinebersama.video_id.chic_diva') }}" data-analytics="Chic Diva Geek">
                        Ketahui bagaimana nama domain .com yang tepercaya membantu Adrian McLanahan dan bisnisnya menjangkau pelanggan baru
                    </x-displays.card-video>
                </div>
                <div data-analytics-level3="carousel1" class="swiper-slide">
                    <x-displays.card-video title="Startup Experience" image="images/placeholder-video-startup.webp" videoId="{{ config('onlinebersama.video_id.startup_experience') }}" data-analytics="Startup Experience">
                        Ketahui bagaimana Henrik Scheel menggunakan nama domain .com miliknya untuk membantu bisnisnya beroperasi di 25 negara di seluruh dunia.
                    </x-displays.card-video>
                </div>
                <div data-analytics-level3="carousel2" class="swiper-slide">
                    <x-displays.card-video title="IKAT Indonesia" image="images/placeholder-video-ikat-indonesia.webp" videoId="{{ config('onlinebersama.video_id.ikat_indonesia') }}" data-analytics="IKAT Indonesia">
                        Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya
                    </x-displays.card-video>
                </div>
                <div data-analytics-level3="carousel3" class="swiper-slide">
                    <x-displays.card-video title="Chic Diva Geek" image="images/placeholder-video-chic-diva.webp" videoId="{{ config('onlinebersama.video_id.chic_diva') }}" data-analytics="Chic Diva Geek">
                        Ketahui bagaimana nama domain .com yang tepercaya membantu Adrian McLanahan dan bisnisnya menjangkau pelanggan baru
                    </x-displays.card-video>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- End Small Business Stories --}}

    {{-- Resources --}}
    <section
        id="resources"
        data-analytics-level2="Browse All Resources"
        class="bg-deep-blue-300 px-4 md:px-8">
        <div class="max-w-300 mx-auto py-10 md:py-12.5">
            <div class="space-y-3 text-center text-white mb-10">
                <h2 class="headline-1">Telusuri Semua Sumber Informasi</h2>
                <p class="paragraph-md text-[18px]! md:text-[26px]!">Jelajahi artikel, video, dan lainnya untuk mendukung perjalanan Anda.</p>
            </div>
            <livewire:resources-list
                topic="{{ request()->query('topic') }}"
                :topics="$topics->toArray()"
            />
        </div>
    </section>
    {{-- End Resources --}}

    {{-- Entrepreneurship Journey --}}
    <section
        data-analytics-level2="The Entrepreneurial Journey"
        class="flex flex-col gap-10 py-10 max-w-250 mx-auto px-4 md:gap-12.5 md:px-8 md:py-12.5">
        <div class="space-y-3 text-center">
            <h2 class="text-navy-blue-300 text-center headline-1">Perjalanan Wirausaha</h2>
            <p class="paragraph-md text-deep-blue-300">Mulai dari membangun tim hingga memasarkan perusahaan Anda secara efektif, wirausahawan berpengalaman Henrik Scheel dapat membantu Anda membuka potensi pola pikir kewirausahaan.</p>
        </div>
        <div class="flex flex-col">
            <x-displays.accordion
                question="Pola Pikir Seorang Wirausaha"
                data-analytics="The Entrepreneurial Mindset">
                <x-displays.card-accordion
                    image="images/articles/pola-pikir-seorang-wirausaha.webp"
                    data-analytics="The Entrepreneurial Mindset"
                    videoId="6331201181112"
                    slug="pola-pikir-wirausaha">
                    Apakah Anda melihat masalah sebagai peluang, dan menyambut tantangan baru dengan antusias? Mampukah Anda tetap fokus ketika keadaan menjadi sulit? Ini hanyalah beberapa dari sekian banyak kualitas yang membentuk pola pikir kewirausahaan, dan sangat berharga ketika memulai bisnis Anda sendiri.
                </x-displays.card-accordion>
            </x-displays.accordion>
            <x-displays.accordion
                question="Menemukan dan Menguji Ide Startup Anda"
                data-analytics="Finding and Testing Your Startup Idea">
                <x-displays.card-accordion
                    image="images/articles/menemukan-dan-menguji-ide-startup-anda.webp"
                    data-analytics="Finding and Testing Your Startup Idea"
                    videoId="6331201181112"
                    slug="menemukan-menguji-ide-startup">
                    Satu-satunya cara untuk menciptakan perusahaan yang brilian adalah dengan memulai dari ide yang belum sempurna, lalu mengujinya, dan belajar darinya sehingga Anda dapat mengubahnya menjadi sesuatu yang benar-benar hebat. Temukan strategi untuk menghasilkan ide bagi usaha rintisan Anda, dan cara mengujinya secara efektif.
                </x-displays.card-accordion>
            </x-displays.accordion>
            <x-displays.accordion
                question="Cara Menemukan Nama yang Tepat"
                data-analytics="How to Find a Great Name">
                <x-displays.card-accordion
                    image="images/articles/cara-menemukan-nama-yang-tepat.webp"
                    data-analytics="How To Find a Great Name"
                    videoId="6331201181112"
                    slug="cara-menemukan-nama-tepat">
                    Nama perusahaan Anda adalah kesan pertama bagi calon pelanggan. Jadi, nama itu harus relevan dan mudah diingat, tetapi juga mudah diadaptasikan dengan perubahan agar Anda memiliki ruang untuk berkembang. Bingung harus mulai dari mana? Henrik menguraikan empat langkah penting untuk membantu Anda menemukan nama yang tepat untuk usaha rintisan Anda.
                </x-displays.card-accordion>
            </x-displays.accordion>
            <x-displays.accordion
                question="Manfaat Halaman Tujuan"
                data-analytics="The Benefits of Landing Pages">
                <x-displays.card-accordion
                    image="images/articles/manfaat-halaman-tujuan-landing-page.webp"
                    data-analytics="The Benefits of Landing Pages"
                    videoId="6331201181112"
                    slug="manfaat-halaman-tujuan">
                    Halaman Tujuan atau Landing page difokuskan untuk mendorong pengunjung mengambil satu langkah kecil dalam prosesnya menjadi pelanggan, dan dapat berfungsi sebagai alat bantu pemasaran berbiaya rendah, tetapi bernilai tinggi bagi perusahaan dari berbagai skala. Temukan manfaat yang dapat ditawarkan halaman arahan untuk bisnis Anda dalam e-book kami.
                </x-displays.card-accordion>
            </x-displays.accordion>
            <x-displays.accordion
                question="Cara Efektif untuk Memasarkan Bisnis Anda"
                data-analytics="Effective Ways to Market Your Company"
                :last="true">
                <x-displays.card-accordion
                    image="images/articles/cara-efektif-untuk-memasarkan-perusahaan-anda.webp"
                    data-analytics="Effective Ways To Market Your Company"
                    videoId="6331201181112"
                    slug="memasarkan-bisnis-anda">
                    Mempelajari cara memasarkan bisnis secara efektif adalah salah satu keterampilan terpenting yang harus dimiliki setiap wirausahawan, dan cara terbaik untuk menginformasikan apa yang ditawarkan perusahaan kepada audiens target adalah dengan menceritakan kisah Anda.
                </x-displays.card-accordion>
            </x-displays.accordion>
        </div>
    </section>
    {{-- End Entrepreneurship Journey --}}

    {{-- Search --}}
    <section
        data-analytics-level2="search"
        class="bg-deep-blue-300 pb-3 pt-7.5 min-[415px]:-mb-2! min-[415px]:pb-0! sm:mb-auto! md:mb-0! md:pt-13.75! md:pb-3.75!">
        <div class="container flex flex-col justify-center items-center">
            <h2 class="subheadline-2 text-white text-center text-[26px]! leading-7.5! max-w-62.5 mx-auto sm:mx-0 sm:max-w-full lg:text-[40px]!">
                Temukan Nama Domain .com
            </h2>
        </div>
        <x-displays.namestudio/>
    </section>
    {{-- End Search --}}
</main>

@endsection
