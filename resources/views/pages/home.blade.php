@extends('app')

@section('title', 'Di Mana Dunia Menemukanmu | Nama Domain .com')
@section('meta_description', 'Nama domain .com membantu orang menemukan dan memercayai bisnis Anda. Temukan mengapa .com bisa menjadi pilihan yang tepat untuk bisnis Anda.')
@section('meta_keywords', '.com, nama domain .com')
@section('meta_image', asset('images/hero-homepage.webp'))

@section('content')

<main data-analytics-level1="body">
    <!-- Hero -->
    <section
        x-data="{
            initVideoObserver() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.$refs.heroVideo.play();
                            observer.unobserve(this.$refs.heroVideo);
                        }
                    });
                }, { threshold: 0.5 });

                observer.observe(this.$refs.heroVideo);
            }
        }"
        data-analytics-level2="hero"
        data-analytics-name="video play button (video name tbd)"
        x-init="initVideoObserver()"
        class="relative">
        <div class="absolute inset-0 bg-gradient-hero size-full"></div>
        <video
            x-ref="heroVideo"
            class="w-full h-100 object-cover aspect-48/17 lg:h-152.75 xl:h-170"
            poster="{{ asset('images/hero-homepage.webp') }}"
            autoplay="true"
            muted="true"
            loop
            playsinline>
            <!-- Mobile / Vertical screens (Width up to 599px) -->
            <source src="{{ assetAwsUrl('onlinebersama/videos/com_Indonesia_Brand Anthem_Mobile.mp4') }}" type="video/mp4" media="(max-width: 599px)">
            <!-- Tablets / Square screens (Width between 600px and 1024px) -->
            <source src="{{ assetAwsUrl('onlinebersama/videos/com_Indonesia_Brand Anthem_Desktop.mp4') }}" type="video/mp4" media="(max-width: 1024px)">
            <!-- Desktop / Widescreen fallback (Default) -->
            <source src="{{ assetAwsUrl('onlinebersama/videos/com_Indonesia_Brand Anthem_Desktop.mp4') }}" type="video/mp4">
            Your browser does not support the HTML5 video tag.
        </video>
        <div class="container top-0 left-1/2 absolute flex justify-center items-end px-7 pt-7 pb-4 size-full -translate-x-1/2 md:justify-start sm:p-10 lg:px-18 lg:pt-20 lg:pb-15">
            <div class="space-y-2 text-white text-center sm:space-y-3 md:space-y-6 md:text-left lg:space-y-5">
                <h1 class="headline-1 leading-normal text-[28px]! sm:leading-10! sm:text-[42px]! lg:leading-13.5! lg:text-[54px]! lg:font-extrabold!">
                    Di Mana Dunia
                    <span class="relative md:block md:leading-19 md:text-[78px] lg:text-[90px] lg:leading-22!">
                        Menemukanmu<sup class="tm">TM</sup>
                    </span>
                </h1>
                <p class="max-w-135 leading-7! text-[20px]! paragraph-md md:max-w-212.5 md:leading-9! lg:text-[28px]!">
                    Nama domain .com membantu orang-orang menemukan dan memercayai Anda
                </p>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Search -->
    <section
        data-analytics-level2="search"
        class="bg-deep-blue-300 -mb-2.5 pb-0 pt-7.5 md:mb-0 md:pt-13.75 md:pb-3.75">
        <div class="container flex flex-col justify-center items-center">
            <h2 class="subheadline-2 text-white text-center text-[26px]! leading-7.5! max-w-62.5 mx-auto sm:mx-0 sm:max-w-full lg:text-[40px]!">
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
            class="max-w-full mx-auto py-7.5 md:py-12.5 xl:px-8 2xl:px-0 2xl:max-w-331.5">
            <h2 class="headline-1 max-w-md mx-auto text-navy-blue-300 text-center -mb-6 px-4 md:px-0 md:-mb-2 md:max-w-2xl xl:mx-0 xl:max-w-full">
                Bagaimana Cara Saya Menggunakan .com?
            </h2>
            <div class="online-bersama-how-to-use-grow swiper">
                <div x-data="{ active: 'social' }" class="swiper-wrapper">
                    <div @mouseenter="active = 'email'" :class="active === 'email' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Email"
                        class="swiper-slide">
                        <x-displays.card-grow active="email" route="email" image="images/brand-1.webp" data-analytics=".com for Email">
                            Email
                        </x-displays.card-grow>
                    </div>
                    <div @mouseenter="active = 'social'" :class="active === 'social' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Social Media & E-Commerce"
                        class="swiper-slide">
                        <x-displays.card-grow active="social" route="social-media" image="images/brand-2.webp" data-analytics=".com for Social Media & E-Commerce">
                            Media Sosial dan <span class="block">E-Commerce</span>
                        </x-displays.card-grow>
                    </div>
                    <div @mouseenter="active = 'websites'" :class="active === 'websites' ? 'hovered' : 'not-hovered'"
                        data-analytics-level3=".com for Websites"
                        class="swiper-slide">
                        <x-displays.card-grow active="websites" route="websites" image="images/brand-3.webp" data-analytics=".com for Websites">
                            Situs Web
                        </x-displays.card-grow>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div x-data data-analytics-level2="Not Just a Domain. A Declaration." class="relative">
            <img data-analytics-name="video image Not Just a Domain. A Declaration." class="mx-auto hidden lg:block" src="{{ asset('images/placeholder-video-how.webp') }}" alt="">
            <img data-analytics-name="video image Not Just a Domain. A Declaration." class="w-full mx-auto block object-cover sm:h-200 sm:object-bottom md:h-210 min-[900px]:h-230! lg:hidden" src="{{ asset('images/placeholder-video-how-mobile.webp') }}" alt="">
            <button type="button" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.bukan_sekadar_domain') }}')" data-analytics-name="video image Not Just a Domain. A Declaration." class="group absolute top-0 left-0 size-full transition-all duration-300 ease-in-out cursor-pointer z-10">
                <span
                    data-analytics-name="play button Not Just a Domain. A Declaration."
                    class="top-2/3 left-1/2 z-10 absolute -translate-x-1/2 -translate-y-1/2 cursor-pointer transition-all duration-300 ease-in-out hover:scale-110 min-[900px]:top-[60%] lg:top-[55%] group-hover:scale-110">
                    <x-icons.large-play-rounded width="130" height="130" fill="#304D6D" stroke="#304D6D" strokeWidth="4" class="size-10 min-[400px]:size-16 lg:size-20 2xl:size-32.5" />
                </span>
            </button>
            <div class="top-0 left-1/2 -translate-x-1/2 absolute flex justify-center size-full max-w-480 pt-7.5 md:pt-11.75 lg:justify-start lg:px-24 lg:py-32 xl:py-38 xl:px-30 2xl:py-50 2xl:px-42">
                <div class="space-y-3.5 text-center max-w-85 mx-auto sm:max-w-xl lg:text-left lg:max-w-full lg:mx-0">
                    <h2 class="headline-1 text-navy-blue-300 text-[28px]! leading-8.5! sm:leading-13! sm:text-[40px]! lg:max-w-xl lg:mx-0 lg:text-[52px]! lg:leading-16! xl:text-[50px]! xl:leading-13.75!">
                        Bukan Sekadar Domain. Ini Suatu <span class="inline lg:block min-[1120px]:inline!">Pernyataan.</span>
                    </h2>
                    <p class="paragraph-md text-deep-blue-300 text-[18px]! leading-6.5! sm:text-[20px]! lg:max-w-lg lg:text-[22px]! lg:leading-9! xl:text-[26px]!">
                        Tinggalkan jejak Anda dan bangun merek tepercaya dengan .com.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End How To Use -->

    <!-- Why .com? -->
    <section
        data-analytics-level2="Why .com?"
        id="mengapa-com" class="bg-gradient-blue-single py-7.5 scroll-mt-12 px-4 md:px-8 md:py-12.5">
        <div class="max-w-156 mx-auto lg:container">
            <div class="flex flex-col gap-6 mx-auto max-w-250 md:gap-8">
                <div class="space-y-2 text-white text-center">
                    <h2 class="headline-1">Mengapa .com?</h2>
                    <p class="paragraph-md">Nama domain .com dapat digunakan di berbagai platform, tempat, dan kesempatan.</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="gap-4 grid grid-cols-1 lg:grid-cols-3">
                        <div
                            data-analytics-level3="box1"
                            class="bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text Universal"
                                class="space-y-1.25 md:space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[24px]! leading-7.5! subheadline-3 md:text-[32px]!">Universal</h3>
                                <p class="text-white paragraph-md">Nama domain .com dipahami semua orang, di mana pun.</p>
                            </div>
                        </div>
                        <div
                            data-analytics-level3="box2"
                            class="space-y-3 bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text Trusted"
                                class="space-y-1.25 md:space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[24px]! leading-7.5! subheadline-3 md:text-[32px]!">Tepercaya</h3>
                                <p class="text-white paragraph-md">Domain yang dipercaya perusahaan global dan merchant lokal.</p>
                            </div>
                        </div>
                        <div
                            data-analytics-level3="box3"
                            class="bg-navy-blue-500 p-6 rounded-[10px]">
                            <div
                                data-analytics-name="text Recognized"
                                class="space-y-1.25 md:space-y-3">
                                <h3 class="text-vibrant-yellow-300 text-[24px]! leading-7.5! subheadline-3 md:text-[32px]!">Diakui</h3>
                                <p class="text-white paragraph-md">.com diakui oleh bisnis dan konsumen di seluruh dunia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-[10px] overflow-hidden">
                        <img class="w-full rounded-[10px]" src="{{ asset('images/placeholder-video-why-com.webp') }}" alt="">
                        <div class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                        <div class="bottom-0 left-0 p-8 absolute hidden sm:block">
                            <div class="max-w-3xl space-y-2 text-white">
                                <h4 class="font-extrabold! text-[20px]! subheadline-3 sm:text-[28px]!">IKAT Indonesia</h4>
                                <p class="font-semibold! paragraph-sm sm:text-[20px]! sm:leading-normal!">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                            </div>
                        </div>
                        <div
                            x-data
                            data-analytics-name="video image IKAT Indonesia"
                            class="w-full h-full absolute top-0 left-0 group-hover/child:scale-110 transition-all duration-300 ease-in-out">
                            <button
                                data-analytics-name="play button IKAT Indonesia"
                                type="button"
                                @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.ikat_indonesia') }}')"
                                class="group/child relative size-full cursor-pointer outline-none mb-6 sm:mb-0">
                                <x-icons.play-rounded width="78" height="78" fill="#fff" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 group-hover/child:scale-110 sm:-translate-y-[90%] lg:-translate-y-1/2" />
                            </button>
                        </div>
                    </div>
                    <div class="block sm:hidden">
                        <div class="max-w-3xl space-y-2 text-white">
                            <h4 class="text-[20px]! subheadline-3 sm:text-[28px]!">IKAT Indonesia</h4>
                            <p class="paragraph-sm sm:text-[20px]! sm:leading-normal!">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                        </div>
                    </div>
                </div>
                <div class="justify-center md:flex">
                    <a
                        data-analytics-name="button View Success Stories"
                        href="{{ route('find') }}"
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
        <div class="pt-7.5 pb-50 px-4 md:pb-58 md:pt-12.5 md:px-8 md:container">
            <h2 class="sticky top-18 mb-10 text-navy-blue-300 text-center headline-1 max-w-lg mx-auto sm:top-20 md:top-24 lg:top-40 min-[1200px]:top-32!">Tinggalkan Jejak Anda Secara Online</h2>
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div
                    data-analytics-level3="card1"
                    class="top-45 sticky card-stack sm:top-38.5 md:top-61.5 lg:top-77.5 min-[1200px]:top-69.5!">
                    <x-displays.card-stack number="1" title="Lebih Mudah Ditemukan" image="images/homepage-editorial-1.webp" data-analytics="Be Found Easier">
                        <p class="min-h-20 md:min-h-auto">Nama domain .com membantu memudahkan pelanggan menemukan bisnis secara online.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="card2"
                    class="top-45 sticky card-stack -mt-20 translate-y-20 sm:top-38.5 md:-mt-20 md:translate-y-20 md:top-61.5 lg:-mt-20 lg:translate-y-20 lg:top-77.5 min-[1200px]:top-69.5!">
                    <x-displays.card-stack number="2" title="Tampil Beda Secara Online" image="images/homepage-editorial-2.webp" data-analytics="Stand Out Online">
                        <p class="min-h-20 md:min-h-auto">Nama domain .com dapat membantu meningkatkan visibilitas bisnis.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="card3"
                    class="top-45 sticky card-stack -mb-20 translate-y-20 sm:top-38.5 md:-mb-20 md:translate-y-20 md:top-61.5 lg:top-77.5 min-[1200px]:top-69.5!">
                    <x-displays.card-stack number="3" title="Tingkatkan Kredibilitas Anda" image="images/homepage-editorial-3.webp" data-analytics="Enhance Your Credibility">
                        <p class="min-h-20 md:min-h-auto">Nama domain .com dapat membantu usaha kecil terlihat lebih profesional.</p>
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
    </section>
    <!-- End Editorial -->

    <!-- Resources -->
    <section
        data-analytics-level2="Frequently Asked Questions"
        class="pt-7.5 pb-10 px-4 md:px-8 md:pt-12.5 md:pb-20">
        <div class="flex flex-col gap-10 container-medium-smaller">
            <h2 class="text-navy-blue-300 text-center headline-1">Tanya Jawab</h2>
            <div class="flex flex-col">
                <x-displays.accordion
                    question="Mengapa saya harus memilih .com?"
                    data-analytics="Why should I chose a .com?">
                    <p>Selama lebih dari 40 tahun, .com telah menjadi pilihan universal, tepercaya dan diakui bagi bisnis dari berbagai skala. .com merupakan simbol kepercayaan—tempat yang tepercaya dan diakui untuk membangun kehadiran online bisnis Anda.</p>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Apa itu nama domain?"
                    data-analytics="What is a domain name?">
                    <p>Nama domain adalah alamat online yang unik dan dapat disesuaikan (misalnya, <button type="button" class="cursor-pointer text-magenta-300">example.com</button>). Nama domain dapat digunakan untuk mengarahkan orang langsung ke kehadiran online Anda (seperti situs web atau laman media sosial), serta digunakan sebagai alamat email khusus.</p>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Apakah nama domain harus berupa nama bisnis saya?"
                    data-analytics="Does my domain name need to be my business name?">
                    <div class="flex flex-col gap-4">
                        <p>Nama domain dapat mewakili apa pun yang diinginkan, baik bisnis, slogan, nama pribadi, maupun nama proyek yang sedang Anda kerjakan.</p>
                        <p>Pertimbangkan untuk menambahkan lokasi atau kata-kata deskriptif untuk membantu menyampaikan apa yang membuat bisnis, ide, atau proyek Anda unik. Terlepas dari bagaimana Anda menggunakan nama domain nantinya, Anda harus menciptakan alamat web yang mudah diingat dan konsisten agar pelanggan dapat menemukan Anda secara online.</p>
                    </div>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Jika saya membeli nama domain, apakah nama tersebut akan menjadi milik saya selamanya?"
                    data-analytics="When I buy a domain name, is it mine forever?">
                    <p>Secara teknis, Anda sebenarnya “mendaftarkan” nama domain, bukan “membeli”, untuk jangka waktu tertentu (biasanya 1–10 tahun). Artinya, selama Anda terus memperpanjang masa pendaftaran nama domain tersebut, Anda tetap memiliki hak eksklusif untuk menggunakannya. Jika Anda berencana menggunakan nama domain dalam jangka panjang, pertimbangkan untuk mengaktifkan fitur “perpanjangan otomatis” (auto-renew) melalui registrar Anda.</p>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Bagaimana cara mendapatkan nama domain .com?"
                    data-analytics="How do I get a .com domain name?">
                    <p>Anda dapat mendaftarkan nama domain .com melalui registrar atau penyedia layanan pilihan Anda. Jika Anda memerlukan bantuan untuk menentukan nama domain yang tepat bagi ide atau bisnis Anda, NameStudio—<a href="{{ route('find') }}" class="text-magenta-300">alat pencarian nama domain berbasis AI yang dapat digunakan tanpa biaya kami</a>—dapat membantu Anda menemukan berbagai ide nama domain berdasarkan kata kunci dan frasa deskriptif.</p>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Apa saja cara yang dapat saya lakukan untuk menggunakan nama domain?"
                    data-analytics="What are the different ways I can use a domain name?">
                    <div class="flex flex-col gap-4">
                        <p>Nama domain .com tidak hanya diperuntukkan bagi situs web. Ada banyak cara untuk memanfaatkan nama domain .com secara maksimal, seperti penerusan nama domain.</p>
                        <p>Dengan <a href="{{ route('social-media') }}" class="text-magenta-300">meneruskan nama domain</a> ke media sosial atau halaman e-commerce, Anda dapat menciptakan pengalaman yang personal bagi pelanggan dalam menemukan bisnis atau toko online Anda. Anda juga dapat menggunakan nama domain sebagai alamat email khusus, yang dapat membantu bisnis Anda terlihat lebih profesional.</p>
                    </div>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Mengapa saya perlu nama domain .com jika saya sudah punya akun media sosial?"
                    data-analytics="Why do I need a .com domain name if I already have a social media account? ">
                    <p>Jika bisnis Anda memiliki laman media sosial, permudah pelanggan menemukannya dengan mengarahkan alamat web .com khusus yang mudah diingat ke laman tersebut. Dengan begitu, ketika Anda siap membangun situs web, Anda sudah memiliki nama domain .com yang telah dikenal pelanggan dan dapat terus berkembang seiring pertumbuhan bisnis Anda.</p>
                </x-displays.accordion>
                <x-displays.accordion
                    question="Apa saja manfaat memiliki nama domain .com jika saya sudah memiliki ccTLD?"
                    data-analytics="Why Choose a .com if you already registered a cc TLD?"
                    :last="true">
                    <p>Jika Anda memiliki nama domain tingkat atas berdasarkan kode negara (ccTLD), Anda dapat memperluas jangkauan bisnis dengan memasangkannya dengan nama domain .com yang sesuai. Misalnya, jika Anda menggunakan nama domain ccTLD untuk situs web Anda, Anda dapat mengarahkan nama domain .com ke situs web tersebut. Dengan begitu, pelanggan dapat menemukan bisnis Anda, baik saat mereka mengetik nama domain .com maupun nama domain ccTLD Anda.</p>
                </x-displays.accordion>
            </div>
            <div class="justify-center md:flex">
                <a
                    data-analytics-name="button Discover More"
                    href="{{ route('resources.index') }}"
                    class="btn-secondary w-full sm:w-auto">
                    Ketahui Selengkapnya
                </a>
            </div>
        </div>
    </section>
    <!-- End Resources -->
</main>

@endsection
