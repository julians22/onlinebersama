@extends('app')

@section('title', 'Penerusan Nama Domain | Cara Menggunakan Nama Domain .com')

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-light-gray-100">
        <div class="flex justify-between items-center flex-col gap-10.75 py-10 container-medium md:gap-20 md:py-15.5 lg:flex-row">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk <span class="xl:block">Media Sosial dan</span> E-Commerce</h1>
                <p class="text-deep-blue-300 paragraph-md">Dengan penerusan domain, Anda dapat membuat tautan ke toko online atau halaman media sosial dari nama domain .com yang mudah diingat.</p>
            </div>
            <button data-analytics-name="video image | Domain Forwarding Use Case" type="button" class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer box-shadow-sm">
                <div class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <span data-analytics-name="play button | Domain Forwarding Use Case" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
                <img class="w-156 object-cover aspect-video lg:w-125 xl:w-156" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
            </button>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Benefits --}}
    <section
        data-analytics-level2="Benefits of Domain Forwarding"
        class="py-10 container">
        <div class="pb-30 md:pb-48">
            <h2 class="sticky top-20 mb-10 text-navy-blue-300 text-center headline-1 md:top-24 lg:top-30">Manfaat Penerusan Domain</span></h2>
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div
                    data-analytics-level3="Memorable Way to Market"
                    class="top-48 sticky card-stack min-[490px]:top-42 md:top-54 lg:top-60">
                    <x-displays.card-stack number="1" title="Cara Pemasaran yang Tak Terlupakan" image="images/social-media-editorial-1.jpg" alt="">
                        Nama domain .com tidak hanya diperuntukkan bagi situs web. Dengan penerusan domain, Anda dapat memberikan alamat web yang mudah diingat untuk setiap eksistensi online.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="A Consistent Web Address"
                    class="top-48 sticky card-stack -mt-20 translate-y-20 min-[490px]:top-42 md:-mt-22 md:translate-y-22 md:top-54 lg:top-60 lg:-mt-24 lg:translate-y-24">
                    <x-displays.card-stack number="2" title="Alamat Web yang Konsisten" image="images/social-media-editorial-2.jpg" alt="">
                        Dapatkan alamat web .com kustom yang bergerak bersama bisnis Anda. Dengan begitu, meskipun toko fisik berpindah tempat, pelanggan akan selalu dapat menemukan Anda.
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="The Flexibility of Change"
                    class="top-48 sticky card-stack -mb-10 translate-y-20 min-[490px]:top-42 md:-mb-24 md:translate-y-22 md:top-54 lg:top-60 lg:translate-y-24">
                    <x-displays.card-stack number="3" title="Fleksibilitas untuk Berubah" image="images/social-media-editorial-3.jpg" alt="">
                        Anda dapat sewaktu-waktu memperbarui destinasi online yang dituju pengunjung yang mengakses nama domain .com.
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a
                data-analytics-name="button | Discover More Benefits"
                href="{{ route('resources.show', 'apa-itu-penerusan-nama-domain') }}" class="btn-secondary w-full sm:w-auto">
                Ketahui Manfaat Lainnya
            </a>
        </div>
    </section>
    {{-- End Benefits --}}

    {{-- Content --}}
    <section
        data-analytics-level2="Two Ways to Use Domain Forwarding"
        class="bg-deep-blue-300">
        <div class="container-medium pt-10 pb-19.5">
            <h2 class="mb-6 text-white text-center headline-1 max-w-4xl mx-auto md:mb-13">Dua Cara untuk Menggunakan Penerusan Domain</h2>
            <div x-data="{ active: 'social-media' }" class="flex flex-col justify-center gap-4 md:flex-row">
                <div class="flex flex-col gap-4 md:max-w-xs">
                    <button data-analytics-level3="Social Media" type="button" @click="active = 'social-media'" :class="active === 'social-media' && 'bg-white! hover:bg-white! text-deep-blue-300! hover:pl-6!'" class="transition-all duration-300 ease-in-out space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer hover:bg-[#2b4562] hover:pl-7.25">
                        <h3 class="subheadline-3 text-[32px]!">Media Sosial</h3>
                        <p class="paragraph-md text-[24px]!">Buat lebih banyak pasang mata tertuju pada halaman Anda.</p>
                    </button>
                    <button data-analytics-level3="Online Store" type="button" @click="active = 'online-store'" :class="active === 'online-store' && 'bg-white! hover:bg-white! text-deep-blue-300! hover:pl-6!'" class="transition-all duration-300 ease-in-out space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer hover:bg-[#2b4562] hover:pl-7.25">
                        <h3 class="subheadline-3 text-[32px]!">Toko Online</h3>
                        <p class="paragraph-md text-[24px]!">Permudah pencarian bisnis Anda.</p>
                    </button>
                </div>
                <a x-show="active === 'social-media'" data-analytics-level3="right image" href="#" class="relative rounded-[10px] max-w-full overflow-hidden h-88 md:h-auto md:max-w-156">
                    <img data-analytics-name="image | Reach more people by connecting your social page to a custom .com web address." class="size-full object-cover aspect-video" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-4 size-full text-white md:p-6">
                        <p class="leading-8.5! paragraph-md text-[20px]!">Jangkau lebih banyak orang dengan menghubungkan halaman media sosial Anda ke alamat web .com kustom.</p>
                        <p data-analytics-name="text | Read More" class="flex items-center w-max font-sans font-bold text-[20px] decoration-[8%] underline underline-offset-[12%] tracking-[0.25px]">
                            Baca Selengkapnya
                            <x-icons.arrow-rounded width="24" height="24" fill="#fff" class="size-4.5 ml-1" strokeWidth="1" />
                        </p>
                    </div>
                </a>
                <a x-show="active === 'online-store'" x-cloak data-analytics-level3="right image" href="#" class="relative rounded-[10px] max-w-full overflow-hidden h-88 md:h-auto md:max-w-156">
                    <img class="size-full object-cover aspect-video" src="{{ asset('images/uc-email.jpg') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-4 size-full text-white md:p-6">
                        <p class="leading-8.5! paragraph-md text-[20px]!">Tautkan toko Anda di platform mana pun dari nama domain .com kustom.</p>
                        <p data-analytics-name="text | Read More" class="flex items-center w-max font-sans font-bold text-[20px] decoration-[8%] underline underline-offset-[12%] tracking-[0.25px]">
                            Baca Selengkapnya
                            <x-icons.arrow-rounded width="24" height="24" fill="#fff" class="size-4.5 ml-1" strokeWidth="1" />
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- End Content --}}

    {{-- List Point --}}
    <section
        data-analytics-level2="How to Forward Your Domain Name"
        class="flex items-center gap-10 py-10 container flex-col md:py-19.5 xl:items-start xl:gap-28 xl:flex-row 2xl:gap-44">
        <div class="-top-12 flex flex-col gap-11.5 xl:sticky">
            <h2 class="text-navy-blue-300 headline-1 text-center md:text-[48px]! md:leading-15.5!">Cara Meneruskan Nama Domain Anda</h2>
            <button data-analytics-name="video image | How to Forward Your Domain Name" type="button" class="group cursor-pointer relative rounded-[10px] overflow-hidden">
                <div class="top-0 left-0 absolute bg-linear-360 from-black/80 to-transparent size-full"></div>
                <span data-analytics-name="play button | How to Forward Your Domain Name" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </span>
                <img class="size-full aspect-video max-w-150 xl:max-w-full" src="{{ asset('images/usecase-social-media.jpg') }}" alt="">
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
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Masuk dan buka Kelola Nama Domain atau klik tab Nama Domain.</p>
                </div>
            </div>
            <div data-analytics-level3="Select the Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Nama Domain</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Pilih nama domain yang ingin Anda teruskan, cari opsi Penerusan Domain (juga dikenal sebagai Pengalihan), lalu klik Tambah Baru.</p>
                </div>
            </div>
            <div data-analytics-level3="Paste the Destination URL" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Tempel URL Tujuan</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Tempelkan URL media sosial atau halaman e-commerce Anda ke bagian Penerusan atau Pengalihan Domain.</p>
                </div>
            </div>
            <div data-analytics-level3="Update DNS & Save" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Perbarui DNS dan Simpan</h3>
                    <p class="text-deep-blue-300 text-[24px]! leading-9! paragraph-md">Pastikan Anda memperbarui pengaturan DNS untuk mendukung perubahan ini, lalu klik Simpan, dan selesai!</p>
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
                    data-analytics="Email"
                    route="email"
                    image="images/brand-1.jpg">
                    Email
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
