@extends('app')

@section('title', 'Panduan Belajar')

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="relative">
        <img class="hidden w-full h-150 object-cover aspect-16/5 md:block" src="{{ asset('images/hero-resources.jpg') }}" alt="">
        <img class="block w-full h-132.5 object-cover md:hidden" src="{{ asset('images/hero-resources-mobile.jpg') }}" alt="">
        <div class="top-0 left-1/2 absolute flex items-end py-10 size-full -translate-x-1/2 container md:items-center md:py-19.5">
            <div class="space-y-4 text-white">
                <h1 class="headline-1">Panduan Belajar</h1>
                <p class="max-w-162.5 paragraph-md">Temukan cara memaksimalkan nama domain .com Anda dengan kumpulan artikel, video, dan panduan kami.</p>
                <div class="flex justify-start">
                    <a
                        data-analytics-name="button | Liah Semua Sumbar Informasi"
                        href="#"
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
        data-analytics-level2="Kisah Usaha Kecil"
        class="max-w-403 mx-auto py-10 md:pt-10 md:pb-19.5">
        <div class="space-y-3 text-center mb-6 px-4 md:mb-8 md:px-8 xl:px-0">
            <h2 class="headline-1 text-navy-blue-300">Kisah Usaha Kecil</h2>
            <p class="paragraph-md text-deep-blue-300">Lihat bagaimana bisnis menggunakan nama domain .com untuk membantu mereka mencapai tujuan. </p>
        </div>
        <div class="online-bersama-small-business-story swiper">
            <div class="swiper-wrapper">
                <div data-analytics-level3="carousel-1" class="swiper-slide">
                    <img data-analytics-name="video image | Startup Experience" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | Startup Experience" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
                <div data-analytics-level3="carousel-2" class="swiper-slide">
                    <img data-analytics-name="video image | IKAT Indonesia" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | IKAT Indonesia" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
                <div data-analytics-level3="carousel-3" class="swiper-slide">
                    <img data-analytics-name="video image | Chick Diva Geek" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | Chick Diva Geek" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
                <div data-analytics-level3="carousel-4" class="swiper-slide">
                    <img data-analytics-name="video image | Startup Experience" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | Startup Experience" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
                <div data-analytics-level3="carousel-5" class="swiper-slide">
                    <img data-analytics-name="video image | IKAT Indonesia" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | IKAT Indonesia" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
                <div data-analytics-level3="carousel-6" class="swiper-slide">
                    <img data-analytics-name="video image | Chick Diva Geek" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button data-analytics-name="play button | Chick Diva Geek" type="button" class="group">
                        <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
                    </button>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- End Small Business Stories --}}

    {{-- Resources --}}
    <section
        data-analytics-level2="Telusuri Semua Sumber Informasi"
        class="bg-deep-blue-300 px-4 md:px-8">
        <div class="max-w-300 mx-auto py-10 md:pb-19.5">
            <div class="space-y-3 text-center text-white mb-10">
                <h2 class="headline-1">Telusuri Semua Sumber Informasi</h2>
                <p class="paragraph-md">Jelajahi artikel, video, dan lainnya untuk mendukung perjalanan Anda.</p>
            </div>
            <livewire:resources-list :topics="$topics->toArray()" />
        </div>
    </section>
    {{-- End Resources --}}

    {{-- Entrepreneurship Journey --}}
    <section
        data-analytics-level2="Perjalanan Kewirausahaan"
        class="flex flex-col gap-21.25 py-10 max-w-250 mx-auto px-4 md:px-8 md:py-20">
        <div class="space-y-3 text-center">
            <h2 class="text-navy-blue-300 text-center headline-1">Perjalanan Kewirausahaan</h2>
            <p class="paragraph-md text-deep-blue-300">Mulai dari membangun tim hingga memasarkan perusahaan Anda secara efektif, wirausahawan berpengalaman Henrik Scheel dapat membantu Anda membuka potensi pola pikir kewirausahaan.</p>
        </div>
        <div class="flex flex-col">
            <x-displays.accordion question="Pola Pikir Seorang Wirausaha">
                <p>Apakah Anda melihat masalah sebagai peluang, dan menyambut tantangan baru dengan antusias? Mampukah Anda tetap fokus ketika keadaan menjadi sulit? Ini hanyalah beberapa dari sekian banyak kualitas yang membentuk pola pikir kewirausahaan, dan sangat berharga ketika memulai bisnis Anda sendiri.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Menemukan dan Menguji Ide Startup Anda">
                <p>Satu-satunya cara untuk menciptakan perusahaan yang brilian adalah dengan memulai dari ide yang belum sempurna, lalu mengujinya, dan belajar darinya sehingga Anda dapat mengubahnya menjadi sesuatu yang benar-benar hebat. Temukan strategi untuk menghasilkan ide bagi usaha rintisan Anda, dan cara mengujinya secara efektif.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Cara Menemukan Nama yang Tepat">
                <div class="flex flex-col gap-4">
                    <p>Nama perusahaan Anda adalah kesan pertama bagi calon pelanggan. Jadi, nama itu harus relevan dan mudah diingat, tetapi juga mudah diadaptasikan dengan perubahan agar Anda memiliki ruang untuk berkembang. Bingung harus mulai dari mana? Henrik menguraikan empat langkah penting untuk membantu Anda menemukan nama yang tepat untuk usaha rintisan Anda.</p>
                </div>
            </x-displays.accordion>
            <x-displays.accordion question="Manfaat Landing Page">
                <p>Landing page difokuskan untuk mendorong pengunjung mengambil satu langkah kecil dalam prosesnya menjadi pelanggan, dan dapat berfungsi sebagai alat bantu pemasaran berbiaya rendah, tetapi bernilai tinggi bagi perusahaan dari berbagai skala. Temukan manfaat yang dapat ditawarkan halaman arahan untuk bisnis Anda dalam e-book kami.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Cara Efektif untuk Memasarkan Bisnis Anda" :last="true">
                <p>Mempelajari cara memasarkan bisnis secara efektif adalah salah satu keterampilan terpenting yang harus dimiliki setiap wirausahawan, dan cara terbaik untuk menginformasikan apa yang ditawarkan perusahaan kepada audiens target adalah dengan menceritakan kisah Anda.</p>
            </x-displays.accordion>
        </div>
    </section>
    {{-- End Entrepreneurship Journey --}}

    {{-- Search --}}
    <section
        data-analytics-level2="search"
        class="bg-deep-blue-300 py-16 lg:py-22">
        <div class="container flex flex-col justify-center items-center">
            <h2 class="subheadline-2 text-white text-center max-w-xs mx-auto sm:mx-0 sm:max-w-full lg:text-[40px]!">
                Temukan Nama Domain .com
            </h2>
        </div>
        <x-displays.namestudio/>
    </section>
    {{-- End Search --}}
</main>

@endsection
