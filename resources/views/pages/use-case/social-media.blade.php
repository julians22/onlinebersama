@extends('app')

@section('title', 'Use Case - Social Media & E-Commerce')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com untuk <span class="block">Media Sosial dan</span> E-Commerce</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5!">Dengan penerusan domain, Anda dapat membuat tautan ke toko online atau halaman media sosial dari nama domain .com yang mudah diingat.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Manfaat Penerusan Domain</span></h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="card-stack sticky top-40">
                <x-displays.card-stack number="1" title="Cara Pemasaran yang Tak Terlupakan" image="images/social-media-editorial-1.jpg" alt="">
                    Nama domain .com tidak hanya diperuntukkan bagi situs web. Dengan penerusan domain, Anda dapat memberikan alamat web yang mudah diingat untuk setiap eksistensi online.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-66">
                <x-displays.card-stack number="2" title="Alamat Web yang Konsisten" image="images/social-media-editorial-2.jpg" alt="">
                    Dapatkan alamat web .com kustom yang bergerak bersama bisnis Anda. Dengan begitu, meskipun toko fisik berpindah tempat, pelanggan akan selalu dapat menemukan Anda.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-92">
                <x-displays.card-stack number="3" title="Fleksibilitas untuk Berubah" image="images/social-media-editorial-3.jpg" alt="">
                    Anda dapat sewaktu-waktu memperbarui destinasi online yang dituju pengunjung yang mengakses nama domain .com.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3 px-10">Ketahui Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="container pt-10 pb-19.5">
            <h2 class="headline-1 text-white text-center mb-13">Dua Cara untuk Menggunakan <span class="block">Penerusan Domain</span></h2>
            <div x-data="{ active: 'social-media' }" class="flex justify-center gap-4">
                <div class="flex flex-col gap-4 max-w-xs">
                    <button type="button" @click="active = 'social-media'" :class="active === 'social-media' && 'bg-white! text-deep-blue-300!'" class="rounded-[10px] bg-navy-blue-300 text-white text-left cursor-pointer space-y-3 h-full p-6">
                        <h3 class="subheadline-3">Media Sosial</h3>
                        <p class="paragraph-md leading-8.5!">Buat lebih banyak pasang mata tertuju pada halaman Anda.</p>
                    </button>
                    <button type="button" @click="active = 'online-store'" :class="active === 'online-store' && 'bg-white! text-deep-blue-300!'" class="rounded-[10px] bg-navy-blue-300 text-white text-left cursor-pointer space-y-3 h-full p-6">
                        <h3 class="subheadline-3">Toko Online</h3>
                        <p class="paragraph-md leading-8.5!">Permudah pencarian bisnis Anda.</p>
                    </button>
                </div>
                <a x-show="active === 'social-media'" href="#" class="relative rounded-[10px] overflow-hidden max-w-156">
                    <img class="aspect-video object-cover size-full" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col gap-4 justify-end size-full bg-linear-360 from-black/60 to-transparent text-white p-6">
                        <p class="paragraph-md leading-8.5!">Jangkau lebih banyak orang dengan menghubungkan halaman media sosial Anda ke alamat web .com kustom.</p>
                        <p class="font-sans text-[20px] w-max tracking-[0.25px] font-bold underline underline-offset-[12%] decoration-[8%]">Baca Selengkapnya</p>
                    </div>
                </a>
                <a x-show="active === 'online-store'" x-cloak href="#" class="relative rounded-[10px] overflow-hidden max-w-156">
                    <img class="aspect-video object-cover size-full" src="{{ asset('images/uc-email.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col gap-4 justify-end size-full bg-linear-360 from-black/60 to-transparent text-white p-6">
                        <p class="paragraph-md leading-8.5!">Tautkan toko Anda di platform mana pun dari nama domain .com kustom.</p>
                        <p class="font-sans text-[20px] w-max tracking-[0.25px] font-bold underline underline-offset-[12%] decoration-[8%]">Baca Selengkapnya</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">Cara Meneruskan Nama Domain Anda</h2>
            <div class="relative rounded-[10px] overflow-hidden">
                <img class="aspect-video size-full" src="{{ asset('images/how-to-forward-domain.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-linear-360 from-black/80 to-transparent"></div>
                <button type="button" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-8 max-w-125">
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Daftarkan Nama Domain</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Awali dengan mendaftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Masuk ke Akun Anda</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Masuk dan buka Kelola Nama Domain atau klik tab Nama Domain.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Nama Domain</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Pilih nama domain yang ingin Anda teruskan, cari opsi Penerusan Domain (juga dikenal sebagai Pengalihan), lalu klik Tambah Baru.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Tempel URL Tujuan</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Tempelkan URL media sosial atau halaman e-commerce Anda ke bagian Penerusan atau Pengalihan Domain.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Perbarui DNS dan Simpan</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Pastikan Anda memperbarui pengaturan DNS untuk mendukung perubahan ini, lalu klik Simpan, dan selesai!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">Bagaimana Cara Menggunakan .com?</h2>
            <div class="grid grid-cols-2 gap-8">
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Situs Web</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/resources-hero.jpg') }}" alt="">
        <div class="absolute container top-0 left-1/2 -translate-x-1/2 flex flex-col gap-6 justify-center size-full">
            <h2 class="headline-1 text-navy-blue-300">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="paragraph-md text-deep-blue-300 max-w-150 leading-8.5!">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
            <a href="#" class="btn-secondary w-max font-bold py-3 px-4">Kunjungi Panduan Belajar</a>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="container flex flex-col items-center justify-center gap-6 py-22">
            <h2 class="subheadline-2 text-white">Temukan Nama Domain .com</h2>
            <img src="{{ asset('images/ns-search.png') }}">
        </div>
    </section>
</main>

@endsection
