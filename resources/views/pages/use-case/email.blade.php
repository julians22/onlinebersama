@extends('app')

@section('title', '.com untuk Email')
@section('meta_description', 'Dengan alamat email .com khusus, email bisnis Anda akan terlihat lebih profesional')
@section('meta_keywords', '.com untuk email, manfaat email khusus')
@section('meta_image', asset('images/uc-email.webp'))

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-light-gray-100">
        <div x-data class="flex justify-between items-center flex-col gap-10 py-7.5 container-medium md:gap-20 md:py-12.5 lg:flex-row">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk Email</h1>
                <p class="text-deep-blue-300 paragraph-md">Jadikan email sebagai pernyataan kredibilitas. Dengan alamat email .com khusus, email bisnis Anda dapat terlihat lebih profesional.</p>
            </div>
            <button data-analytics-name="video image Email Use Case" type="button" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.email') }}')" class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer box-shadow-sm">
                <div class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <span data-analytics-name="play button Email Use Case" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
                <img class="w-156 object-cover aspect-video lg:w-125 xl:w-156" src="{{ asset('images/uc-email.webp') }}" alt="">
            </button>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Benefits --}}
    <section
        data-analytics-level2="Benefits of Custom Email"
        class="py-7.5 container md:py-12.5">
        <div class="pb-42 md:pb-38">
            <h2 class="sticky top-18 mb-10 text-navy-blue-300 text-center headline-1 sm:top-20 md:top-24 lg:top-40 min-[1200px]:top-32!">Manfaat Email Khusus</h2>
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div
                    data-analytics-level3="Build Legitimacy"
                    class="top-36.5 sticky card-stack sm:top-38.5 md:top-48 lg:top-64 min-[1200px]:top-55.5!">
                    <x-displays.card-stack number="1" title="Membangun Legitimasi" image="images/email-editorial-1.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Beri bisnis Anda tampilan yang berkelas dan profesional. Dapatkan alamat email .com khusus dan tunjukkan kepada semua orang bahwa Anda profesional.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="Increase Credibility"
                    class="top-36.5 sticky card-stack -mt-22 translate-y-22 sm:top-38.5 md:top-48 md:-mt-20 md:translate-y-20 lg:top-64 min-[1200px]:top-55.5! lg:-mt-20 lg:translate-y-20">
                    <x-displays.card-stack number="2" title="Meningkatkan Kredibilitas" image="images/email-editorial-2.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Dengan alamat email .com khusus, Anda dapat memberikan kesan yang kuat dan membekas, serta menumbuhkan kepercayaan pelanggan terhadap Anda.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="Market Your Business"
                    class="top-36.5 sticky card-stack -mb-20 translate-y-22 sm:top-38.5 md:top-48 md:-mb-18 md:translate-y-20 lg:top-60 min-[1200px]:top-55.5! lg:translate-y-20">
                    <x-displays.card-stack number="3" title="Memasarkan Bisnis Anda" image="images/email-editorial-3.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Dapatkan alamat email .com khusus dan bangun merek Anda lewat setiap email yang dikirim.</p>
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a
                data-analytics-name="button Discover More Benefits"
                href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.email-detail'), 'slug' => 'manfaat']) }}"
                class="btn-secondary w-full sm:w-auto">
                Temukan Manfaat Lainnya
            </a>
        </div>
    </section>
    {{-- End Benefits --}}

    {{-- Content --}}
    <section
        data-analytics-level2="Three Ways To Use A Custom Email Address"
        class="bg-gradient-blue-double relative z-10">
        <div x-data class="flex justify-center items-center gap-10 px-10 py-7.5 flex-col container md:px-8 md:gap-12 md:py-12.5 xl:flex-row">
            <button data-analytics-name="video animation Three Ways to Use a Custom Email Address" type="button" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.tiga_cara') }}')" class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer">
                <img class="size-full object-cover aspect-video max-w-155.5" src="{{ asset('images/placeholder-video-three-ways.webp') }}" alt="">
                <span data-analytics-name="play button Three Ways to Use a Custom Email Address" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
            </button>
            <div class="space-y-6 max-w-150 text-white md:p-6">
                <h2 class="headline-1">Tiga Cara Menggunakan Alamat Email Khusus</h2>
                <p class="paragraph-md md:text-[20px]! md:leading-8!">Siap membawa komunikasi Anda ke level selanjutnya? Cari tahu cara menggunakan alamat email khusus untuk mendukung bisnis Anda dalam video ini.</p>
            </div>
        </div>
    </section>
    {{-- End Content --}}

    {{-- List Point --}}
    <section
        data-analytics-level2="How To Setup a Custom Email Address"
        class="flex items-center gap-10 py-7.5 container flex-col md:py-12.5 xl:items-start xl:gap-30 xl:flex-row">
        <div x-data class="-top-12 flex flex-col gap-7.5 md:gap-11.5 xl:sticky">
            <h2 class="text-navy-blue-300 headline-1 text-center">Cara Menyiapkan Alamat <span class="sm:block">Email Khusus</span></h2>
            <div class="relative rounded-[10px] overflow-hidden">
                <img class="size-full aspect-video object-cover max-w-150 xl:max-w-full" src="{{ asset('images/usecase-email.webp') }}" alt="">
            </div>
        </div>
        <div class="flex flex-col gap-8 max-w-157.5 xl:-mt-12">
            <div class="sticky top-20 w-full h-25 bg-linear-180 from-white from-25% to-transparent -mt-18 hidden xl:block"></div>
            <div data-analytics-level3="Register a Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Daftarkan Nama Domain</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Awali dengan mendaftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Log In to Your Account" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Masuk ke Akun Anda</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Masuk ke akun registrar Anda, cari ikon Pengaturan, lalu temukan tab Email.</p>
                </div>
            </div>
            <div data-analytics-level3="Select Hosting Provider" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Pilih Penyedia Hosting</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Pilih penyedia hosting email.</p>
                </div>
            </div>
            <div data-analytics-level3="Purchase an Email Plan" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Beli Paket Email</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Beli dan siapkan paket email bisnis, lalu konfigurasikan akun email menggunakan nama domain .com Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Click Create" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Klik Buat</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Cukup klik buat, dan selesai!</p>
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
                    data-analytics="Websites"
                    route="websites"
                    image="images/brand-3.webp">
                    Situs Web
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
                data-analytics-name="button Visit the Learning Hub"
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
        class="bg-deep-blue-300 -mb-2.5 pb-0 pt-7.5 md:mb-0 md:pt-13.75 md:pb-3.75">
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
