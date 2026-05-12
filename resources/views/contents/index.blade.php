@extends('app')

@section('title', 'Resources')

@section('content')

<main>
    <section class="relative">
        <img class="w-full h-150 object-cover aspect-16/5" src="{{ asset('images/hero-resources.jpg') }}" alt="">
        <div class="top-0 left-1/2 absolute flex items-center py-19.5 size-full -translate-x-1/2 container">
            <div class="space-y-4 text-white">
                <h1 class="headline-1">Panduan Belajar</h1>
                <p class="max-w-162.5 paragraph-md">Temukan cara memaksimalkan nama domain .com Anda dengan kumpulan artikel, video, dan panduan kami.</p>
                <div class="flex justify-start">
                    <a href="#" class="btn-secondary font-bold py-3! px-10!">Lihat Semua Sumber Informasi</a>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-403 mx-auto pt-10 pb-19.5">
        <div class="space-y-3 text-center mb-8">
            <h2 class="headline-1 text-navy-blue-300">Kisah Usaha Kecil</h2>
            <p class="paragraph-md text-deep-blue-300">Lihat bagaimana bisnis menggunakan nama domain .com untuk membantu mereka mencapai tujuan. </p>
        </div>
        <div class="online-bersama-small-business-story swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                    <div class="overlay-slide">
                        <h4 class="subheadline-4">IKAT Indonesia</h4>
                        <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                    </div>
                    <button type="button">
                        <img src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <section class="bg-deep-blue-300">
        <div class="container pt-10 pb-19.5">
            <div class="space-y-3 text-center text-white mb-10">
                <h2 class="headline-1">Telusuri Semua Sumber Informasi</h2>
                <p class="paragraph-md">Jelajahi artikel, video, dan lainnya untuk mendukung perjalanan Anda.</p>
            </div>
            <livewire:resources-list></livewire:resources-list>
        </div>
    </section>
    <section class="flex flex-col gap-21.25 py-20 max-w-250 mx-auto">
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
            <x-displays.accordion question="Cara Efektif untuk Memasarkan Bisnis Anda">
                <p>Mempelajari cara memasarkan bisnis secara efektif adalah salah satu keterampilan terpenting yang harus dimiliki setiap wirausahawan, dan cara terbaik untuk menginformasikan apa yang ditawarkan perusahaan kepada audiens target adalah dengan menceritakan kisah Anda.</p>
            </x-displays.accordion>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="flex flex-col justify-center items-center gap-6 py-22 container">
            <h2 class="text-white subheadline-2">Temukan Nama Domain .com</h2>
            <img src="{{ asset('images/ns-search.png') }}">
        </div>
    </section>
</main>

@endsection
