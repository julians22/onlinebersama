@extends('app')

@section('title', 'Di Mana Dunia Menemukanmu | .com')

@section('content')

<main data-analytics-level1="body">
    <!-- Hero -->
    <section
        data-analytics-level2="hero"
        data-analytics-name="video play button | (video name tbd)"
        class="relative">
        <img class="w-full h-112.5 object-cover aspect-48/17 lg:h-152.75 xl:h-170" src="{{ asset('images/hero-homepage.jpg') }}" alt="">
        <div class="container top-0 left-1/2 absolute flex justify-center items-end px-7 pt-7 pb-4 size-full -translate-x-1/2 md:justify-start sm:p-10 lg:px-18.5 lg:py-25.75">
            <div class="space-y-2 text-white text-center sm:space-y-3 md:space-y-6 md:text-left lg:space-y-7">
                <h1 class="headline-1 leading-normal text-[28px]! sm:leading-14! sm:text-5xl! lg:leading-16! lg:text-[64px]! lg:font-extrabold!">
                    Di Mana
                    <span class="block md:leading-20! md:text-[82px] lg:leading-26! lg:text-[110px] 2xl:text-[132px] 2xl:leading-32!">
                        <span class="inline md:block">Dunia</span> Menemukanmu
                    </span>
                </h1>
                <p class="max-w-135 leading-8.5! text-[22px]! paragraph-md md:max-w-212.5 md:leading-11! lg:text-[32px]!">
                    Nama domain .com membantu orang-orang menemukan dan memercayai Anda
                </p>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Search -->
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
    <!-- End Search -->

    <!-- How To Use -->
    <section class="bg-light-gray-100 overflow-hidden">
        <div
            data-analytics-level2="How Do I Use a .com?"
            class="max-w-full mx-auto py-10 xl:px-8 2xl:px-0 2xl:max-w-331.5">
            <h2 class="headline-1 max-w-md mx-auto text-navy-blue-300 text-center -mb-6 px-4 md:px-0 md:-mb-2 md:max-w-2xl xl:mx-0 xl:max-w-full">
                Bagaimana Cara Menggunakan .com?
            </h2>
            <div class="online-bersama-how-to-use-grow swiper">
                <div x-data="{ active: 'social' }" class="swiper-wrapper">
                    <div @mouseenter="active = 'email'" :class="active === 'email' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Email"
                        class="swiper-slide">
                        <x-displays.card-grow active="email" route="email" image="images/brand-1.jpg" data-analytics=".com for Email">
                            Email
                        </x-displays.card-grow>
                    </div>
                    <div @mouseenter="active = 'social'" :class="active === 'social' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Social Media & E-Commerce"
                        class="swiper-slide">
                        <x-displays.card-grow active="social" route="social-media" image="images/brand-2.jpg" data-analytics=".com for Social Media & E-Commerce">
                            Media Sosial dan <span class="block">E-Commerce</span>
                        </x-displays.card-grow>
                    </div>
                    <div @mouseenter="active = 'websites'" :class="active === 'websites' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Websites"
                        class="swiper-slide">
                        <x-displays.card-grow active="websites" route="websites" image="images/brand-3.jpg" data-analytics=".com for Websites">
                            Situs Web
                        </x-displays.card-grow>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div
            data-analytics-level2="Not Just a Domain. A Declaration."
            class="relative">
            <img
                data-analytics-name="video image | Not Just a Domain. A Declaration."
                class="mx-auto hidden lg:block" src="{{ asset('images/placeholder-video-how.jpg') }}" alt="">
            <img
                data-analytics-name="video image | Not Just a Domain. A Declaration."
                class="w-full mx-auto block sm:h-200 sm:object-cover sm:object-bottom md:h-210 min-[900px]:h-230! lg:hidden" src="{{ asset('images/placeholder-video-how-mobile.jpg') }}" alt="">
            <div class="top-0 left-1/2 -translate-x-1/2 absolute flex justify-center size-full max-w-480 px-4 pt-4 min-[400px]:pt-13.5 sm:px-6 sm:pt-6 md:pt-11.75 lg:justify-start lg:px-24 lg:py-32 xl:py-38 xl:px-30 2xl:py-50 2xl:px-42">
                <div class="space-y-3.5 text-center max-w-85 mx-auto sm:max-w-xl lg:text-left lg:max-w-full lg:mx-0">
                    <h2 class="headline-1 text-navy-blue-300 text-[24px]! leading-8! sm:leading-13! sm:text-[40px]! lg:max-w-2xl lg:mx-0 lg:text-[52px]! lg:leading-16! xl:text-[64px]! xl:leading-18! 2xl:leading-21.25! xl:max-w-3xl min-[1680px]:max-w-4xl!">
                        Bukan Sekadar Domain. Melainkan Suatu Pernyataan.
                    </h2>
                    <p class="paragraph-md text-deep-blue-300 text-[16px]! leading-6! sm:text-[18px]! lg:max-w-xs xl:text-[24px]! xl:leading-8! xl:max-w-lg">
                        Tinggalkan jejak Anda dan bangun merek tepercaya dengan .com.
                    </p>
                </div>
            </div>
            <div
                data-analytics-name="video image | Not Just a Domain. A Declaration."
                class="w-full h-full absolute top-0 left-0 group-hover/child:scale-110 transition-all duration-300 ease-in-out">
                <button
                    data-analytics-name="play button | Not Just a Domain. A Declaration."
                    type="button"
                    class="top-2/3 left-1/2 z-10 absolute -translate-x-1/2 -translate-y-1/2 cursor-pointer transition-all duration-300 ease-in-out hover:scale-110 min-[900px]:top-[60%] lg:top-[55%]">
                    <x-icons.large-play-rounded width="130" height="130" fill="#304D6D" stroke="#304D6D" strokeWidth="4" class="size-10 min-[400px]:size-16 lg:size-20 2xl:size-32.5" />
                </button>
            </div>
        </div>
    </section>
    <!-- End How To Use -->

    <!-- Why .com? -->
    <section
        data-analytics-level2="Why .com?"
        id="mengapa-com" class="bg-gradient-blue-single py-10 scroll-mt-12 px-4 md:px-8 md:pb-19.5 md:pt-11.5">
        <div class="max-w-156 mx-auto lg:container">
            <div class="flex flex-col gap-6 mx-auto max-w-250 md:gap-8">
                <div class="space-y-2 text-white text-center">
                    <h2 class="headline-1">Mengapa .com?</h2>
                    <p class="paragraph-md md:leading-8.5!">Nama domain .com dapat digunakan di berbagai platform, tempat, dan kesempatan.</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="gap-4 grid grid-cols-1 lg:grid-cols-3">
                        <div
                            data-analytics-level3="box1"
                            class="bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text | Universal"
                                class="space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[32px]! leading-9.5! subheadline-3">Universal</h3>
                                <p class="text-white text-[24px]! paragraph-md">Nama domain .com dipahami semua orang, di mana pun.</p>
                            </div>
                        </div>
                        <div
                            data-analytics-level3="box2"
                            class="space-y-3 bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text | Trusted"
                                class="space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[32px]! leading-9.5! subheadline-3">Tepercaya</h3>
                                <p class="text-white text-[24px]! paragraph-md">Domain yang dipercaya perusahaan global dan merchant lokal.</p>
                            </div>
                        </div>
                        <div
                            data-analytics-level3="box3"
                            class="bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text | Recognized"
                                class="space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[32px]! leading-9.5! subheadline-3">Diakui</h3>
                                <p class="text-white text-[24px]! paragraph-md">.com diakui oleh bisnis dan konsumen di seluruh dunia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-[10px] overflow-hidden">
                        <img class="w-full rounded-[10px]" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                        <div class="bottom-0 left-0 p-8 absolute hidden sm:block">
                            <div class="max-w-3xl space-y-2 text-white">
                                <h4 class="font-extrabold! text-[20px]! subheadline-3 sm:text-[28px]!">IKAT Indonesia</h4>
                                <p class="font-semibold! paragraph-sm sm:text-[20px]! sm:leading-normal!">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                            </div>
                        </div>
                        <div
                            data-analytics-name="video image | Startup Experience"
                            class="w-full h-full absolute top-0 left-0 group-hover/child:scale-110 transition-all duration-300 ease-in-out">
                            <button
                                data-analytics-name="play button | Startup Experience"
                                type="button" class="group/child relative size-full cursor-pointer outline-none mb-6 sm:mb-0">
                                <x-icons.play-rounded width="78" height="78" fill="#fff" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 group-hover/child:scale-110 sm:-translate-y-[90%] lg:-translate-y-1/2" />
                            </button>
                        </div>
                    </div>
                    <div class="block sm:hidden">
                        <div class="max-w-3xl space-y-2 text-white">
                            <h4 class="font-extrabold! text-[20px]! subheadline-3 sm:text-[28px]!">IKAT Indonesia</h4>
                            <p class="font-semibold! paragraph-sm sm:text-[20px]! sm:leading-normal!">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                        </div>
                    </div>
                </div>
                <div class="justify-center md:flex">
                    <a
                        data-analytics-name="button | View Success Stories"
                        href="{{ route('resources.show', 'pertanyaan-usaha-kecil-tentang-membangun-kehadiran-online') }}"
                        class="btn-primary w-full sm:w-auto">
                        Lihat Kisah Usaha Kecil
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why .com -->

    <!-- Editorial -->
    <section
        data-analytics-level2="Make Your Mark Online"
        class="bg-light-gray-100">
        <div class="pt-10 pb-64 px-4 mx-auto max-w-md md:px-8 md:container">
            <h2 class="sticky top-20 mb-10 text-navy-blue-300 text-center headline-1 md:top-24 lg:top-30">Tinggalkan Jejak Anda di Dunia Maya</h2>
            <div class="flex flex-col gap-6 mx-auto max-w-208">
                <div
                    data-analytics-level3="card1"
                    class="top-50 sticky card-stack md:top-76 min-[1150px]:top-60!">
                    <x-displays.card-stack number="1" title="Lebih Mudah Ditemukan" image="images/homepage-editorial-1.jpg" data-analytics="Be Found Easier">
                        Nama domain .com membantu memudahkan pelanggan menemukan bisnis secara online.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="card2"
                    class="top-50 sticky card-stack -mt-18 translate-y-18 md:-mt-22 md:translate-y-22 md:top-76 lg:-mt-20 lg:translate-y-20 min-[1150px]:top-60!">
                    <x-displays.card-stack number="2" title="Tampil Beda Secara Online" image="images/homepage-editorial-2.jpg" data-analytics="Stand Out Online">
                        Nama domain .com dapat membantu meningkatkan visibilitas bisnis.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="card3"
                    class="top-50 sticky card-stack -mb-24 translate-y-18 md:-mb-24 md:translate-y-20 md:top-76 min-[1150px]:top-60!">
                    <x-displays.card-stack number="3" title="Tingkatkan Kredibilitas Anda" image="images/homepage-editorial-3.jpg" data-analytics="Enhance Your Credibility">
                        Nama domain .com dapat membantu usaha kecil terlihat lebih profesional.
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
    </section>
    <!-- End Editorial -->

    <!-- Resources -->
    <section
        data-analytics-level2="Frequently Asked Questions"
        class="flex flex-col gap-10 py-10 container-smaller md:py-20">
        <h2 class="text-navy-blue-300 text-center headline-1">Tanya Jawab</h2>
        <div class="flex flex-col">
            <x-displays.accordion
                question="Mengapa saya harus memilih .com?"
                data-analytics="Why should I chose a .com?">
                <p>Selama lebih dari 40 tahun, .com telah menjadi pilihan universal, tepercaya, dan diakui bisnis dari berbagai skala. .com adalah simbol kepercayaan - tempat tepercaya dan diakui untuk membangun basis online bisnis Anda.</p>
            </x-displays.accordion>
            <x-displays.accordion
                question="Apa itu nama domain?"
                data-analytics="What is a domain name?">
                <p>Nama domain adalah alamat online unik dan kustom (misalnya, contoh.com) yang dapat digunakan untuk mengarahkan orang langsung ke eksistensi online (seperti situs web atau halaman media sosial), dan sebagai alamat email kustom.</p>
            </x-displays.accordion>
            <x-displays.accordion
                question="Apakah nama domain harus berupa nama bisnis saya?"
                data-analytics="Does my domain name need to be my business name?">
                <div class="flex flex-col gap-4">
                    <p>Nama domain dapat mewakili apa pun yang diinginkan, baik bisnis, slogan, nama pribadi, maupun judul proyek yang sedang Anda kerjakan.</p>
                    <p>Pertimbangkan untuk menambahkan lokasi atau kata-kata deskriptif untuk membantu menyampaikan apa yang membuat bisnis, ide, atau proyek Anda unik. Terlepas dari bagaimana Anda menggunakan nama domain nantinya, Anda harus menciptakan alamat web yang mudah diingat dan konsisten agar pelanggan dapat menemukan Anda secara online.</p>
                </div>
            </x-displays.accordion>
            <x-displays.accordion
                question="Jika saya membeli nama domain, apakah nama tersebut akan menjadi milik saya selamanya?"
                data-analytics="When I buy a domain name, is it mine forever?">
                <p>Secara teknis, Anda “mendaftarkan” nama domain untuk jangka waktu tertentu (biasanya 1-10 tahun), bukan “membeli”. Artinya, selama Anda terus memperpanjang penggunaan nama domain tersebut, Anda akan tetap memiliki kendali eksklusif atasnya. Jika Anda berencana menggunakan nama domain untuk jangka panjang, pertimbangkan untuk mengatur “perpanjangan otomatis” melalui registrar.</p>
            </x-displays.accordion>
            <x-displays.accordion
                question="Bagaimana cara mendapatkan nama domain .com?"
                data-analytics="How do I get a .com domain name?">
                <p>Anda dapat mendaftarkan nama domain .com sendiri melalui registrar atau peritel pilihan Anda. Jika Anda membutuhkan bantuan dalam menentukan nama domain yang tepat untuk ide atau bisnis, alat bantu pencarian nama domain yang didukung AI kami yang tersedia gratis, NameStudio, dapat membantu Anda menghasilkan berbagai pilihan berdasarkan kata kunci dan frasa deskriptif.</p>
            </x-displays.accordion>
            <x-displays.accordion
                question="Apa saja cara yang dapat saya lakukan untuk menggunakan nama domain?"
                data-analytics="What are the different ways I can use a domain name?">
                <div class="flex flex-col gap-4">
                    <p>Nama domain .com tidak hanya diperuntukkan bagi situs web. Ada banyak cara untuk memanfaatkan nama domain .com secara maksimal, seperti penerusan nama domain.</p>
                    <p>Dengan meneruskan nama domain  ke media sosial atau halaman e-commerce, Anda dapat menciptakan pengalaman yang personal bagi pelanggan dalam menemukan bisnis atau toko online Anda. Anda juga dapat menggunakan nama domain sebagai alamat email kustom, yang dapat membantu bisnis Anda terlihat lebih profesional.</p>
                </div>
            </x-displays.accordion>
            <x-displays.accordion
                question="Mengapa perlu nama domain .com jika sudah punya akun media sosial?"
                data-analytics="Why do I need a .com domain name if I already have a social media account? ">
                <p>Jika bisnis Anda memiliki halaman media sosial, permudah pencarian dengan meneruskan alamat web .com kustom yang mudah diingat ke halaman tersebut. Dengan begitu, begitu sudah siap membangun situs web, Anda akan memiliki nama domain .com yang sudah mapan dan dikenal pelanggan, serta dapat berkembang seiring dengan kemajuan bisnis Anda.</p>
            </x-displays.accordion>
            <x-displays.accordion
                question="Apa saja manfaat memiliki nama domain .com jika saya sudah memiliki ccTLD?"
                data-analytics="Why Choose a .com if you already registered a cc TLD?"
                :last="true">
                <p>Jika Anda memiliki nama domain tingkat atas kode negara (ccTLD), Anda dapat memperluas jangkauan bisnis dengan memasangkannya dengan nama domain .com yang sesuai. Sebagai contoh, jika Anda menggunakan nama domain ccTLD yang sudah ada untuk situs web, Anda dapat meneruskan nama domain .com ke situs web tersebut. Sekarang pelanggan dapat menemukan Anda saat mengetik nama domain .com atau ccTLD Anda.</p>
            </x-displays.accordion>
        </div>
        <div class="justify-center md:flex">
            <a
                data-analytics-name="button | Discover More"
                href="{{ route('resources.index') }}"
                class="btn-secondary w-full sm:w-auto">
                Ketahui Selengkapnya
            </a>
        </div>
    </section>
    <!-- End Resources -->
</main>

@endsection
