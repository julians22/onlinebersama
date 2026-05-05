@extends('app')

@section('title', 'Alamat Email Kustom')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com untuk Email</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5!">Jadikan email sebagai pernyataan kredibilitas. Dengan alamat email .com kustom, email bisnis Anda dapat terlihat lebih profesional.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-email.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Manfaat Email Kustom</h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="card-stack sticky top-40">
                <x-displays.card-stack number="1" title="Membangun Legitimasi" image="images/email-editorial-1.jpg" alt="">
                    Beri bisnis Anda tampilan yang berkelas dan profesional. Dapatkan alamat email .com kustom dan tunjukkan kepada semua orang bahwa Anda profesional.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-60">
                <x-displays.card-stack number="2" title="Meningkatkan Kredibilitas" image="images/email-editorial-2.jpg" alt="">
                    Dengan alamat email .com kustom, Anda dapat memberikan kesan yang kuat dan membekas, serta menumbuhkan kepercayaan pelanggan terhadap Anda.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-80">
                <x-displays.card-stack number="3" title="Memasarkan Bisnis Anda" image="images/email-editorial-3.jpg" alt="">
                    Dapatkan alamat email .com kustom dan bangun merek Anda lewat setiap email yang dikirim.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3 px-10">Ketahui Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="container flex justify-center items-center gap-12 py-20">
            <div class="shrink-0 relative rounded-[10px] overflow-hidden">
                <img class="aspect-video size-full object-cover" src="{{ asset('images/three-ways.jpg') }}" alt="">
                <button type="button" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
            <div class="max-w-150 space-y-6 p-6 text-white">
                <h2 class="headline-2">Tiga Cara Menggunakan Alamat Email Kustom</h2>
                <p class="paragraph-md leading-8.5!">Siap membawa komunikasi Anda ke level selanjutnya? Cari tahu cara menggunakan alamat email kustom untuk mendukung bisnis Anda dalam video ini.</p>
            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">Cara Menyiapkan Alamat <span class="block">Email Kustom</span></h2>
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
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Masuk ke akun registrar Anda, cari ikon Pengaturan, lalu temukan tab Email.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Penyedia Hosting</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Pilih penyedia hosting email.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Beli Paket Email</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Beli dan siapkan paket email bisnis, lalu konfigurasikan akun email menggunakan nama domain .com Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Klik Buat</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Cukup klik buat, dan selesai!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">Bagaimana Cara Menggunakan .com?</h2>
            <div class="grid grid-cols-2 gap-8">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Media Sosial dan <span class="block">E-Commerce</span></x-displays.card-inside>
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
