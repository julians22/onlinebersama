@extends('app')

@section('title', '.com untuk Media Sosial dan E-commerce | Penerusan Nama Domain')
@section('meta_description', 'Dengan penerusan domain, Anda dapat mengarahkan nama domain .com yang mudah diingat ke toko online atau laman media sosial Anda.')
@section('meta_keywords', '.com untuk media sosial, .com untuk e-commerce, manfaat penerusan domain')
@section('meta_image', asset('images/uc-social-media-ecommerce.webp'))

@section('content')

<main data-analytics-level1="body">
    {{-- Hero --}}
    <section
        data-analytics-level2="hero"
        class="bg-light-gray-100">
        <div x-data class="flex justify-between items-center flex-col gap-10 py-7.5 container-medium md:gap-20 md:py-12.5 lg:flex-row">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk <span class="xl:block">Media Sosial dan</span> E-Commerce</h1>
                <p class="text-deep-blue-300 paragraph-md">Dengan penerusan domain, Anda dapat membuat tautan ke toko online atau halaman media sosial dengan nama domain .com yang mudah diingat.</p>
            </div>
            <div class="group relative rounded-[10px] overflow-hidden shrink-0 cursor-pointer box-shadow-sm" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.social_media') }}')">
                <img class="w-156 object-cover aspect-video lg:w-125 xl:w-156" src="{{ asset('images/uc-social-media-ecommerce.webp') }}" alt="">
                <div data-analytics-name="video image | Domain Forwarding Use Case" class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <button type="button" data-analytics-name="play button | Domain Forwarding Use Case" class="transition-all duration-300 ease-in-out cursor-pointer top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                    <x-icons.play-rounded width="78" height="78" fill="#fff" />
                </button>
            </div>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Benefits --}}
    <section
        data-analytics-level2="Benefits of Domain Forwarding"
        class="py-7.5 container md:py-12.5">
        <div class="pb-42 md:pb-40">
            <div class="flex flex-col gap-6 mx-auto md:max-w-208">
                <div class="top-18 sticky card-stack sm:top-20 md:top-25 lg:top-40 min-[1200px]:top-32!">
                    <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Manfaat Penerusan Domain</span></h2>
                    <div data-analytics-level3="Memorable Way to Market">
                        <x-displays.card-stack number="1" title="Cara Pemasaran yang Tak Terlupakan" image="images/social-media-editorial-1.webp" alt="">
                            <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Nama domain .com tidak hanya diperuntukkan bagi situs web. Dengan penerusan domain, Anda dapat memberikan alamat web yang mudah diingat untuk setiap kehadiran online.</p>
                        </x-displays.card-stack>
                    </div>
                </div>
                <div
                    data-analytics-level3="A Consistent Web Address"
                    class="top-36.5 sticky card-stack -mt-22 translate-y-22 sm:top-38.5 md:top-48.5 md:-mt-20 md:translate-y-20 lg:top-64 min-[1200px]:top-55.5! lg:-mt-20 lg:translate-y-20">
                    <x-displays.card-stack number="2" title="Alamat Web yang Konsisten" image="images/social-media-editorial-2.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Dapatkan alamat web .com khusus yang bergerak bersama bisnis Anda. Dengan begitu, meskipun toko fisik berpindah tempat, pelanggan akan selalu dapat menemukan Anda.</p>
                    </x-displays.card-stack>
                </div>
                <div
                    data-analytics-level3="The Flexibility of Change"
                    class="top-36.5 sticky card-stack -mb-20 translate-y-22 sm:top-38.5 md:top-48.5 md:-mb-18 md:translate-y-20 lg:top-64 min-[1200px]:top-55.5! lg:translate-y-20">
                    <x-displays.card-stack number="3" title="Fleksibilitas untuk Berubah" image="images/social-media-editorial-3.webp" alt="">
                        <p class="min-h-40 min-[500px]:min-h-32 sm:min-h-24 md:min-h-auto">Anda dapat sewaktu-waktu memperbarui destinasi online yang dituju pengunjung yang mengakses nama domain .com.</p>
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a
                data-analytics-name="button | Discover More Benefits"
                href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.social-media-detail'), 'slug' => 'pelajari-selengkapnya']) }}" class="btn-secondary w-full sm:w-auto">
                Temukan Manfaat Lainnya
            </a>
        </div>
    </section>
    {{-- End Benefits --}}

    {{-- Content --}}
    <section
        data-analytics-level2="Two Ways to Use Domain Forwarding"
        class="bg-deep-blue-300 relative z-10">
        <div class="container-medium py-7.5 md:py-12.5">
            <h2 class="mb-6 text-white text-center headline-1 max-w-4xl mx-auto md:mb-13">Dua Cara untuk Menggunakan Penerusan Domain</h2>
            <div x-data="{ active: 'social-media' }" class="flex flex-col justify-center gap-4 md:flex-row">
                <div class="flex flex-col gap-4 md:max-w-xs">
                    <button data-analytics-level3="Social Media" type="button" @click="active = 'social-media'" :class="active === 'social-media' && 'bg-white! hover:bg-white! text-deep-blue-300! hover:pl-6!'" class="transition-all duration-300 ease-in-out space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer md:space-y-2 hover:bg-[#2b4562] hover:pl-7.25">
                        <h3 class="subheadline-4 font-semibold! text-[24px]! leading-7.5! md:text-[26px]!" data-analytics-level3="Social Media">Media Sosial</h3>
                        <p class="paragraph-sm font-medium! text-[18px]! leading-6.5! md:leading-8! md:text-[20px]!" data-analytics-level3="Social Media">Buat lebih banyak orang melihat halaman Anda.</p>
                    </button>
                    <button data-analytics-level3="Online Store" type="button" @click="active = 'online-store'" :class="active === 'online-store' && 'bg-white! hover:bg-white! text-deep-blue-300! hover:pl-6!'" class="transition-all duration-300 ease-in-out space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer md:space-y-2 hover:bg-[#2b4562] hover:pl-7.25">
                        <h3 class="subheadline-4 font-semibold! text-[24px]! leading-7.5! md:text-[26px]!" data-analytics-level3="Online Store">Toko Online</h3>
                        <p class="paragraph-sm font-medium! text-[18px]! leading-6.5! md:leading-8! md:text-[20px]!" data-analytics-level3="Online Store">Permudah pencarian bisnis Anda.</p>
                    </button>
                </div>
                <a x-show="active === 'social-media'" data-analytics-level3="right image" data-analytics-name="image | Reach more people by connecting your social page to a custom .com web address."
                    href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.social-media-detail'), 'slug' => 'cara-menggunakan']) }}" class="relative rounded-[10px] max-w-full overflow-hidden h-88 md:h-auto md:max-w-156">
                    <img data-analytics-name="image | Reach more people by connecting your social page to a custom .com web address." class="size-full object-cover aspect-video" src="{{ asset('images/uc-social-media-ecommerce.webp') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-4 size-full text-white md:p-6">
                        <p class="leading-6.5! paragraph-md text-[18px]!">Jangkau lebih banyak orang dengan menghubungkan halaman media sosial Anda ke alamat web .com khusus.</p>
                        <p data-analytics-name="text | Read More" class="flex items-center w-max font-sans font-bold text-[20px] decoration-[8%] underline underline-offset-[12%] tracking-[0.25px]">
                            Baca Selengkapnya
                            <x-icons.arrow-rounded width="24" height="24" fill="#fff" class="size-4.5 ml-1" strokeWidth="1" />
                        </p>
                    </div>
                </a>
                <a x-show="active === 'online-store'" x-cloak data-analytics-level3="right image" data-analytics-name="image | Link to your store on any platform from a custom .com domain name."
                    href="{{ route('resources.handle_second_route', ['second_route' => config('onlinebersama.custom_article_route.social-media-detail'), 'slug' => 'cara-menggunakan']) }}" class="relative rounded-[10px] max-w-full overflow-hidden h-88 md:h-auto md:max-w-156">
                    <img class="size-full object-cover aspect-video" src="{{ asset('images/uc-email.webp') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-4 size-full text-white md:p-6">
                        <p class="leading-6.5! paragraph-md text-[18px]!">Hubungkan toko Anda di platform apa pun dengan nama domain .com khusus</p>
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
        class="flex items-center gap-10 py-7.5 container flex-col md:py-12.5 xl:items-start xl:gap-30 xl:flex-row">
        <div x-data class="xl:top-20 flex flex-col gap-7.5 w-full md:gap-11.5 xl:sticky">
            <h2 class="text-navy-blue-300 headline-1 text-center">Cara Meneruskan Nama <span class="sm:block">Domain Anda</span></h2>
            <div class="group relative mx-auto rounded-[10px] overflow-hidden cursor-pointer" @click="$store.videoModal.openModal('{{ config('onlinebersama.video_id.social_media_detail') }}')">
                <img class="size-full aspect-video object-cover max-w-140 rounded-[10px]" src="{{ asset('images/usecase-social-media.webp') }}" alt="">
                <div data-analytics-name="video image | How to Forward Your Domain Name" class="top-0 left-0 absolute bg-gradient-video size-full"></div>
                <button type="button" data-analytics-name="play button | How to Forward Your Domain Name" class="transition-all duration-300 ease-in-out cursor-pointer top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
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
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Awali dengan mendaftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div data-analytics-level3="Log In to Your Account" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Masuk ke Akun Anda</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Masuk dan buka Kelola Nama Domain atau klik tab Nama Domain.</p>
                </div>
            </div>
            <div data-analytics-level3="Select the Domain Name" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Pilih Nama Domain</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Pilih nama domain yang ingin Anda teruskan, cari opsi Penerusan Domain (juga dikenal sebagai Pengalihan), lalu klik Tambah Baru.</p>
                </div>
            </div>
            <div data-analytics-level3="Paste the Destination URL" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Tempel URL Tujuan</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Tempelkan URL media sosial atau halaman e-commerce Anda ke bagian Penerusan atau Pengalihan Domain.</p>
                </div>
            </div>
            <div data-analytics-level3="Update DNS & Save" class="flex gap-3.25 md:px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-7.5 font-extrabold text-[16px] text-navy-blue-300 shrink-0 md:text-[32px] md:font-semibold md:size-12.5">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3 text-[24px]! leading-7.5! md:text-[26px]!">Perbarui DNS dan Simpan</h3>
                    <p class="text-deep-blue-300 text-[18px]! leading-6.5! paragraph-md md:text-[20px]! md:leading-8!">Pastikan Anda memperbarui pengaturan DNS untuk mendukung perubahan ini, lalu klik Simpan, dan selesai!</p>
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
                    data-analytics="Email"
                    route="email"
                    image="images/brand-1.webp">
                    Email
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
