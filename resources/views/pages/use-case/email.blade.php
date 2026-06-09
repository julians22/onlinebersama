@extends('app')

@section('title', 'Alamat Email Khusus | Cara Menggunakan Nama Domain .com')

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-light-gray-100">
        <div class="flex justify-between items-center flex-col gap-10.75 py-10 container-medium md:gap-20 md:py-15.5 lg:flex-row">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk Email</h1>
                <p class="text-deep-blue-300 paragraph-md">Jadikan email sebagai pernyataan kredibilitas. Dengan alamat email .com kustom, email bisnis Anda dapat terlihat lebih profesional.</p>
            </div>
            <button data-analytics-name="video image | Email Use Case" type="button" class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer box-shadow-sm">
                <div class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <span data-analytics-name="play button | Email Use Case" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
                <img class="w-156 object-cover aspect-video lg:w-125 xl:w-156" src="{{ asset('images/uc-email.jpg') }}" alt="">
            </button>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Benefits --}}
    <section
        data-analytics-level2="Benefits of Custom Email"
        class="py-10 container">
        <div class="pb-28 md:pb-40">
            <h2 class="sticky top-20 mb-10 text-navy-blue-300 text-center headline-1 md:top-24 lg:top-30">Manfaat Email Kustom</h2>
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div
                    data-analytics-level3="Build Legitimacy"
                    class="top-48 sticky card-stack min-[407px]:top-40 md:top-54 lg:top-60">
                    <x-displays.card-stack number="1" title="Membangun Legitimasi" image="images/email-editorial-1.jpg" alt="">
                        Beri bisnis Anda tampilan yang berkelas dan profesional. Dapatkan alamat email .com kustom dan tunjukkan kepada semua orang bahwa Anda profesional.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="Increase Credibility"
                    class="top-48 sticky card-stack -mt-20 translate-y-20 min-[407px]:top-40 md:-mt-22 md:translate-y-22 md:top-54 lg:-mt-20 lg:translate-y-20 lg:top-60">
                    <x-displays.card-stack number="2" title="Meningkatkan Kredibilitas" image="images/email-editorial-2.jpg" alt="">
                        Dengan alamat email .com kustom, Anda dapat memberikan kesan yang kuat dan membekas, serta menumbuhkan kepercayaan pelanggan terhadap Anda.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="Market Your Business"
                    class="top-48 sticky card-stack -mb-8 translate-y-20 min-[407px]:top-40 md:-mb-20 md:translate-y-22 md:top-54 lg:top-60">
                    <x-displays.card-stack number="3" title="Memasarkan Bisnis Anda" image="images/email-editorial-3.jpg" alt="">
                        Dapatkan alamat email .com kustom dan bangun merek Anda lewat setiap email yang dikirim.
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a
                data-analytics-name="button | Discover More Benefits"
                href="#"
                class="btn-secondary w-full sm:w-auto">
                Ketahui Manfaat Lainnya
            </a>
        </div>
    </section>
    {{-- End Benefits --}}

    {{-- Content --}}
    <section
        data-analytics-level2="Three Ways To Use A Custom Email Address"
        class="bg-gradient-blue-double">
        <div class="flex justify-center items-center gap-10 px-10 py-10 flex-col container md:px-8 md:gap-12 md:py-20 xl:flex-row">
            <button data-analytics-name="video animation | Three Ways to Use a Custom Email Address" type="button" class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer">
                <img class="size-full object-cover aspect-video" src="{{ asset('images/three-ways.jpg') }}" alt="">
                <span data-analytics-name="play button | Three Ways to Use a Custom Email Address" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
            </button>
            <div class="space-y-2 max-w-150 text-white md:space-y-6 md:p-6">
                <h2 class="headline-2">Tiga Cara Menggunakan Alamat Email Kustom</h2>
                <p class="paragraph-md md:leading-8.5!">Siap membawa komunikasi Anda ke level selanjutnya? Cari tahu cara menggunakan alamat email kustom untuk mendukung bisnis Anda dalam video ini.</p>
            </div>
        </div>
    </section>
    {{-- End Content --}}

    {{-- List Point --}}
    <section
        data-analytics-level2="How To Setup a Custom Email Address"
        class="flex items-center gap-10 py-10 container flex-col md:py-19.5 xl:items-start xl:gap-28 xl:flex-row 2xl:gap-44">
        <div class="-top-12 flex flex-col gap-11.5 xl:sticky">
            <h2 class="text-navy-blue-300 headline-1 text-center md:text-[48px]! md:leading-15.5!">Cara Menyiapkan Alamat <span class="sm:block">Email Kustom</span></h2>
            <button data-analytics-name="video image | How to Setup Custom Email" type="button" class="group cursor-pointer relative rounded-[10px] overflow-hidden">
                <div class="top-0 left-0 absolute bg-linear-360 from-black/80 to-transparent size-full"></div>
                <span data-analytics-name="play button | How to Setup Custom Email" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
                <img class="size-full aspect-video max-w-150 xl:max-w-full" src="{{ asset('images/usecase-email.jpg') }}" alt="">
            </button>
        </div>
        <div class="flex flex-col gap-8 max-w-125 xl:pt-28">
            <div class="sticky top-20 w-full h-25 bg-linear-180 from-white from-25% to-transparent -mt-18 hidden xl:block"></div>
            <div data-analytics-level3="Register a Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Daftarkan Nama Domain</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Awali dengan mendaftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Log In to Your Account" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Masuk ke Akun Anda</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Masuk ke akun registrar Anda, cari ikon Pengaturan, lalu temukan tab Email.</p>
                </div>
            </div>
            <div data-analytics-level3="Select Hosting Provider" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Penyedia Hosting</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Pilih penyedia hosting email.</p>
                </div>
            </div>
            <div data-analytics-level3="Purchase an Email Plan" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Beli Paket Email</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Beli dan siapkan paket email bisnis, lalu konfigurasikan akun email menggunakan nama domain .com Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Click Create" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Klik Buat</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Cukup klik buat, dan selesai!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End List Point --}}

    {{-- How To Use --}}
    <section
        data-analytics-level2="How Do I Use a .com?"
        class="bg-light-gray-100">
        <div class="flex flex-col gap-10 py-10 container md:pb-19.5">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-1 md:grid-cols-2">
                <x-displays.card-inside
                    data-analytics="Social Media & E-Commerce"
                    route="social-media"
                    image="images/brand-2.jpg">
                    Media Sosial dan <span class="block">E-Commerce</span>
                </x-displays.card-inside>
                <x-displays.card-inside
                    data-analytics="Websites"
                    route="websites"
                    image="images/brand-3.jpg">
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
        <img class="mx-auto object-cover hidden h-150 md:block 2xl:h-auto" src="{{ asset('images/hero-resources-usecase.jpg') }}" alt="">
        <img class="w-full block h-187.5 object-cover md:h-auto md:hidden" src="{{ asset('images/hero-resources-usecase-mobile.jpg') }}" alt="">
        <div class="top-0 left-1/2 absolute flex flex-col justify-start gap-6 size-full -translate-x-1/2 py-10 container md:py-0 md:justify-center">
            <h2 class="text-navy-blue-300 headline-1">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="max-w-150 text-deep-blue-300 paragraph-md md:leading-8.5!">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
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
