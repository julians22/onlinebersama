@extends('app')

@section('title', '.com untuk Situs Web | Nama Domain .com')
@section('meta_description', 'Situs web dengan nama domain .com menjadi fondasi yang dapat diandalkan pelanggan untuk menemukan dan berinteraksi secara online, seiring pertumbuhan situs web Anda')
@section('meta_keywords', '.com untuk situs web, manfaat situs web')
@section('meta_image', asset('images/uc-websites.webp'))

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-light-gray-100">
        <div x-data class="flex justify-between items-center flex-col gap-10 py-7.5 container-medium md:gap-20 md:py-12.5 lg:flex-row">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk Situs Web</h1>
                <p class="text-deep-blue-300 paragraph-md">Situs web dengan nama domain .com adalah fondasi yang dapat diandalkan pelanggan Anda untuk menemukan dan berinteraksi secara online seiring perkembangan bisnis Anda.</p>
            </div>
            <div class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer box-shadow-sm" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.website') }}')">
                <img class="w-156 object-cover aspect-video lg:w-125 xl:w-156" src="{{ asset('images/uc-websites.webp') }}" alt="">
                <div data-analytics-name="video image | Website Use Case" class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <button type="button" data-analytics-name="play button | Website Use Case" class="transition-all duration-300 ease-in-out cursor-pointer top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </button>
            </div>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Benefits --}}
    <section
        data-analytics-level2="Benefits of a Website"
        class="py-7.5 container md:py-12.5">
        <div class="pb-42 md:pb-44">
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div class="top-18 sticky card-stack sm:top-20 md:top-25 lg:top-40 min-[1200px]:top-32!">
                    <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Manfaat Situs Web</h2>
                    <div data-analytics-level3="Grow on Your Terms">
                        <x-displays.card-stack number="1" title="Berkembang Sesuai Keinginan Anda" image="images/website-editorial-1.webp" alt="">
                            <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Berikan bisnis Anda tempat untuk berakar dan berkembang sesuai keinginan Anda. Situs web dengan nama domain .com dapat terus berkembang seiring pertumbuhan bisnis Anda</p>
                        </x-displays.card-stack>
                    </div>
                </div>
                <div
                    data-analytics-level3="Control Your Brand"
                    class="top-36.5 sticky card-stack -mt-22 translate-y-22 md:top-48.5 md:-mt-22 md:translate-y-22 lg:top-64 min-[1200px]:top-55.5! lg:-mt-24 lg:translate-y-24">
                    <x-displays.card-stack number="2" title="Kendalikan Merek Anda" image="images/website-editorial-2.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Memiliki situs web dengan nama domain .com memberi Anda ruang untuk membangun merek dan mengendalikan kehadiran online Anda.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="Get Noticed by Customers"
                    class="top-36.5 sticky card-stack -mb-20 translate-y-22 md:top-48.5 md:-mb-20 md:translate-y-22 lg:top-64 min-[1200px]:top-55.5! lg:translate-y-24">
                    <x-displays.card-stack number="3" title="Lebih Mudah Ditemukan" image="images/website-editorial-3.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Situs web dengan nama domain .com memudahkan pelanggan menemukan Anda. Di sinilah dunia menemukan Anda.</p>
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a
                data-analytics-name="button | Discover More Benefits"
                href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.websites-detail'), 'slug' => 'manfaat']) }}"
                class="btn-secondary w-full sm:w-auto">
                Temukan Manfaat Lainnya
            </a>
        </div>
    </section>
    {{-- End Benefits --}}

    {{-- Content --}}
    <section
        data-analytics-level2="Website Planning Checklist"
        class="bg-gradient-blue-double relative z-10">
        <div class="flex flex-col justify-center items-center gap-10 py-7.5 container-medium md:py-12.5">
            <div class="space-y-4 text-white text-center">
                <h2 class="headline-1 text-center">Daftar Periksa Perencanaan Situs Web</h2>
                <p class="paragraph-md md:text-[26px]!">Bangun rumah online Anda di situs web dengan nama domain .com.</p>
            </div>
            <div class="gap-8 grid grid-cols-1 max-w-214 xl:max-w-full xl:grid-cols-3">
                <div
                    data-analytics-level3="card1"
                    data-analytics-name="box | Create a Plan to Build Your Website"
                    class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <x-icons.list width="40" height="40" fill="#1A2E47" />
                        <h3 class="paragraph-md font-semibold! leading-7.5! text-[24px]! md:text-[26px]!">Buat Rencana Pembangunan Situs Web Anda</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Pilih dan daftarkan nama domain .com untuk alamat web Anda.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Tentukan tujuan situs web Anda (misalnya, blog, situs e-commerce, brosur online).</p>
                    </div>
                </div>
                <div
                    data-analytics-level3="card2"
                    data-analytics-name="box | Defining Website Requirements"
                    class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <x-icons.list width="40" height="40" fill="#1A2E47" />
                        <h3 class="paragraph-md font-semibold! leading-7.5! text-[24px]! md:text-[26px]!">Tentukan Persyaratan Situs Web</h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Tentukan informasi terpenting yang harus ada di situs web Anda sekarang, dan informasi yang dapat ditambahkan nanti.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Cari tahu informasi apa yang akan menarik dan bermanfaat bagi pengunjung Anda (misalnya, informasi kontak, deskripsi produk).</p>
                    </div>
                </div>
                <div
                    data-analytics-level3="card3"
                    data-analytics-name="box | Manage Your Website"
                    class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <x-icons.list width="40" height="40" fill="#1A2E47" />
                        <h3 class="paragraph-md font-semibold! leading-7.5! text-[24px]! md:text-[26px]! xl:max-w-60">Kelola Situs Web Anda</h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Pikirkan cara pengunjung menemukan situs web Anda, dan cantumkan alamat web Anda di semua lokasi yang memungkinkan.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <x-icons.mint-check width="50" height="50" class="shrink-0 size-11.25" />
                        <p class="paragraph-sm text-[18px]! font-medium! leading-6.5!">Pahami siapa saja yang akan mengunjungi situs web Anda menggunakan alat bantu untuk memudahkan analisis lalu lintas situs web Anda.</p>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-center">
                <a data-analytics-name="button | Explore Full Checklist"
                    href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.websites-detail'), 'slug' => 'membuat-situs-web']) }}"
                    class="btn-primary w-full sm:w-auto">
                    Telusuri Daftar Periksa Lengkap
                </a>
            </div>
        </div>
    </section>
    {{-- End Content --}}

    {{-- List Point --}}
    <section
        data-analytics-level2="How to Build a Professional Website"
        class="flex items-center gap-10 py-7.5 container flex-col md:py-12.5 xl:items-start xl:gap-30 xl:flex-row">
        <div x-data class="xl:top-20 flex flex-col gap-7.5 w-full md:gap-11.5 xl:sticky">
            <h2 class="text-navy-blue-300 headline-1 text-center">Cara Membangun Situs <span class="sm:block">Web yang Profesional</span></h2>
            <div class="group relative mx-auto rounded-[10px] overflow-hidden cursor-pointer" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.website_detail') }}')">
                <img class="size-full aspect-video object-cover max-w-140" src="{{ asset('images/usecase-website.webp') }}" alt="">
                <div data-analytics-name="video image | How to Build a Professional Website" class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <button type="button" data-analytics-name="play button | How to Build a Professional Website" class="transition-all duration-300 ease-in-out cursor-pointer top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-8 w-full max-w-157.5 xl:-mt-12">
            <div class="sticky top-20 w-full h-25 bg-linear-180 from-white from-25% to-transparent -mt-18 hidden xl:block"></div>
            <div data-analytics-level3="Register a Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Daftarkan Nama Domain</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Pertama, daftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Log In to Your Account" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Pilih Platform Hosting</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Selanjutnya, pilih platform hosting, lalu pilih paket situs web yang sesuai.</p>
                </div>
            </div>
            <div data-analytics-level3="Select the Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Pilih Paket dan Template</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Pilih paket dan template sesuai tujuan, anggaran, dan gaya Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Paste the Destination URL" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Rancang situs web Anda</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Buat desain situs web dan halaman yang Anda butuhkan.</p>
                </div>
            </div>
            <div data-analytics-level3="Update DNS & Save" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Klik Buat</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Setelah siap, tinjau kembali, lalu publikasikan situs web Anda.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End List Point --}}

    {{-- How To Use --}}
    <section
        data-analytics-level2="How Do I Use a .com?"
        class="bg-light-gray-100">
        <div class="flex flex-col gap-10 py-7.5 container md:py-12.5">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Saya Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-1 md:grid-cols-2">
                <x-displays.card-inside
                    data-analytics="Social Media & E-Commerce"
                    route="social-media"
                    image="images/brand-2.webp">
                    Media Sosial dan <span class="block">E-Commerce</span>
                </x-displays.card-inside>
                <x-displays.card-inside
                    data-analytics="Email"
                    route="email"
                    image="images/brand-1.webp">
                    Email
                </x-displays.card-inside>
            </div>
        </div>
    </section>
    {{-- End How To Use --}}

    {{-- Other Information --}}
    <section
        data-analytics-level2="Looking for More Resources?"
        class="relative bg-[#F0EAE4]">
        <img class="mx-auto object-cover hidden h-150 md:block 2xl:h-auto" src="{{ asset('images/hero-resources-usecase.webp') }}" alt="">
        <img class="w-full block h-187.5 object-cover md:h-auto md:hidden" src="{{ asset('images/hero-resources-usecase-mobile.webp') }}" alt="">
        <div class="top-0 left-1/2 absolute flex flex-col justify-start gap-6 size-full -translate-x-1/2 py-7.5 container md:py-0 md:justify-center">
            <h2 class="text-navy-blue-300 headline-1">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="max-w-150 text-deep-blue-300 paragraph-md">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
            <a
                data-analytics-name="button | Visit the Learning Hub"
                href="{{ route('resources.index') }}"
                class="btn-secondary w-full sm:w-max">
                Kunjungi Panduan Belajar
            </a>
        </div>
    </section>
    {{-- End Other Information --}}

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
