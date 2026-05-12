@extends('app')

@section('title', 'Use Case - Social Media & E-Commerce')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="flex justify-between items-center gap-20 py-15.5 container">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk <span class="block">Media Sosial dan</span> E-Commerce</h1>
                <p class="text-deep-blue-300 paragraph-md">Dengan penerusan domain, Anda dapat membuat tautan ke toko online atau halaman media sosial dari nama domain .com yang mudah diingat.</p>
            </div>
            <div class="relative rounded-[10px] overflow-hidden shrink-0">
                <img class="box-shadow-sm w-156 object-cover aspect-video" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                <div class="top-0 left-0 absolute bg-black/30 size-full"></div>
                <button type="button" class="top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="py-10 container">
        <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Manfaat Penerusan Domain</span></h2>
        <div class="flex flex-col gap-6 mx-auto max-w-208">
            <div class="top-40 sticky card-stack">
                <x-displays.card-stack number="1" title="Cara Pemasaran yang Tak Terlupakan" image="images/social-media-editorial-1.jpg" alt="">
                    Nama domain .com tidak hanya diperuntukkan bagi situs web. Dengan penerusan domain, Anda dapat memberikan alamat web yang mudah diingat untuk setiap eksistensi online.
                </x-displays.card-stack>
            </div>
            <div class="top-66 sticky card-stack">
                <x-displays.card-stack number="2" title="Alamat Web yang Konsisten" image="images/social-media-editorial-2.jpg" alt="">
                    Dapatkan alamat web .com kustom yang bergerak bersama bisnis Anda. Dengan begitu, meskipun toko fisik berpindah tempat, pelanggan akan selalu dapat menemukan Anda.
                </x-displays.card-stack>
            </div>
            <div class="top-92 sticky card-stack">
                <x-displays.card-stack number="3" title="Fleksibilitas untuk Berubah" image="images/social-media-editorial-3.jpg" alt="">
                    Anda dapat sewaktu-waktu memperbarui destinasi online yang dituju pengunjung yang mengakses nama domain .com.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="px-10 py-3 font-bold btn-secondary">Ketahui Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="max-w-380 mx-auto pt-10 pb-19.5">
            <h2 class="mb-13 text-white text-center headline-1">Dua Cara untuk Menggunakan Penerusan Domain</h2>
            <div x-data="{ active: 'social-media' }" class="flex justify-center gap-4">
                <div class="flex flex-col gap-4 max-w-xs">
                    <button type="button" @click="active = 'social-media'" :class="active === 'social-media' && 'bg-white! text-deep-blue-300!'" class="space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer">
                        <h3 class="subheadline-3">Media Sosial</h3>
                        <p class="paragraph-md">Buat lebih banyak pasang mata tertuju pada halaman Anda.</p>
                    </button>
                    <button type="button" @click="active = 'online-store'" :class="active === 'online-store' && 'bg-white! text-deep-blue-300!'" class="space-y-3 bg-navy-blue-300 p-6 rounded-[10px] h-full text-white text-left cursor-pointer">
                        <h3 class="subheadline-3">Toko Online</h3>
                        <p class="paragraph-md">Permudah pencarian bisnis Anda.</p>
                    </button>
                </div>
                <a x-show="active === 'social-media'" href="#" class="relative rounded-[10px] max-w-156 overflow-hidden">
                    <img class="size-full object-cover aspect-video" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-6 size-full text-white">
                        <p class="leading-8.5! paragraph-md">Jangkau lebih banyak orang dengan menghubungkan halaman media sosial Anda ke alamat web .com kustom.</p>
                        <p class="flex items-center w-max font-sans font-bold text-[20px] decoration-[8%] underline underline-offset-[12%] tracking-[0.25px]">
                            Baca Selengkapnya
                            <img src="{{ asset('images/icons/white-chevron-backward.svg') }}" alt="">
                        </p>
                    </div>
                </a>
                <a x-show="active === 'online-store'" x-cloak href="#" class="relative rounded-[10px] max-w-156 overflow-hidden">
                    <img class="size-full object-cover aspect-video" src="{{ asset('images/uc-email.jpg') }}" alt="">
                    <div class="top-0 left-0 absolute flex flex-col justify-end gap-4 bg-linear-360 from-black/60 to-transparent p-6 size-full text-white">
                        <p class="leading-8.5! paragraph-md">Tautkan toko Anda di platform mana pun dari nama domain .com kustom.</p>
                        <p class="flex items-center w-max font-sans font-bold text-[20px] decoration-[8%] underline underline-offset-[12%] tracking-[0.25px]">
                            Baca Selengkapnya
                            <img src="{{ asset('images/icons/white-chevron-backward.svg') }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="flex items-center gap-44 py-19.5 container">
        <div class="top-32 sticky flex flex-col gap-11.5">
            <h2 class="text-navy-blue-300 text-center headline-2">Cara Meneruskan Nama Domain Anda</h2>
            <div class="relative rounded-[10px] overflow-hidden">
                <img class="size-full aspect-video" src="{{ asset('images/how-to-forward-domain.jpg') }}" alt="">
                <div class="top-0 left-0 absolute bg-linear-360 from-black/80 to-transparent size-full"></div>
                <button type="button" class="top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-8 max-w-125">
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Daftarkan Nama Domain</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Awali dengan mendaftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Masuk ke Akun Anda</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Masuk dan buka Kelola Nama Domain atau klik tab Nama Domain.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Nama Domain</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Pilih nama domain yang ingin Anda teruskan, cari opsi Penerusan Domain (juga dikenal sebagai Pengalihan), lalu klik Tambah Baru.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Tempel URL Tujuan</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Tempelkan URL media sosial atau halaman e-commerce Anda ke bagian Penerusan atau Pengalihan Domain.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Perbarui DNS dan Simpan</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Pastikan Anda memperbarui pengaturan DNS untuk mendukung perubahan ini, lalu klik Simpan, dan selesai!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="flex flex-col gap-10 pt-10 pb-19.5 container">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-2">
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Situs Web</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/hero-resources-usecase.jpg') }}" alt="">
        <div class="top-0 left-1/2 absolute flex flex-col justify-center gap-6 size-full -translate-x-1/2 container">
            <h2 class="text-navy-blue-300 headline-1">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="max-w-150 text-deep-blue-300 leading-8.5! paragraph-md">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
            <a href="#" class="px-4 py-3 w-max font-bold btn-secondary">Kunjungi Panduan Belajar</a>
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
