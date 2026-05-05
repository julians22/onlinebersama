@extends('app')

@section('title', 'Alamat Email Kustom')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="flex justify-between items-center gap-20 py-15.5 container">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk Email</h1>
                <p class="text-deep-blue-300 leading-8.5! paragraph-md">Jadikan email sebagai pernyataan kredibilitas. Dengan alamat email .com kustom, email bisnis Anda dapat terlihat lebih profesional.</p>
            </div>
            <div class="relative rounded-[10px] overflow-hidden shrink-0">
                <img class="box-shadow-sm w-156 object-cover aspect-video" src="{{ asset('images/uc-email.jpg') }}" alt="">
                <div class="top-0 left-0 absolute bg-black/30 size-full"></div>
                <button type="button" class="top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="py-10 container">
        <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Manfaat Email Kustom</h2>
        <div class="flex flex-col gap-6 mx-auto max-w-208">
            <div class="top-40 sticky card-stack">
                <x-displays.card-stack number="1" title="Membangun Legitimasi" image="images/email-editorial-1.jpg" alt="">
                    Beri bisnis Anda tampilan yang berkelas dan profesional. Dapatkan alamat email .com kustom dan tunjukkan kepada semua orang bahwa Anda profesional.
                </x-displays.card-stack>
            </div>
            <div class="top-60 sticky card-stack">
                <x-displays.card-stack number="2" title="Meningkatkan Kredibilitas" image="images/email-editorial-2.jpg" alt="">
                    Dengan alamat email .com kustom, Anda dapat memberikan kesan yang kuat dan membekas, serta menumbuhkan kepercayaan pelanggan terhadap Anda.
                </x-displays.card-stack>
            </div>
            <div class="top-80 sticky card-stack">
                <x-displays.card-stack number="3" title="Memasarkan Bisnis Anda" image="images/email-editorial-3.jpg" alt="">
                    Dapatkan alamat email .com kustom dan bangun merek Anda lewat setiap email yang dikirim.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="px-10 py-3 font-bold btn-secondary">Ketahui Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="flex justify-center items-center gap-12 py-20 container">
            <div class="relative rounded-[10px] overflow-hidden shrink-0">
                <img class="size-full object-cover aspect-video" src="{{ asset('images/three-ways.jpg') }}" alt="">
                <button type="button" class="top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
            <div class="space-y-6 p-6 max-w-150 text-white">
                <h2 class="headline-2">Tiga Cara Menggunakan Alamat Email Kustom</h2>
                <p class="leading-8.5! paragraph-md">Siap membawa komunikasi Anda ke level selanjutnya? Cari tahu cara menggunakan alamat email kustom untuk mendukung bisnis Anda dalam video ini.</p>
            </div>
        </div>
    </section>
    <section class="flex items-center gap-44 py-19.5 container">
        <div class="top-32 sticky flex flex-col gap-11.5">
            <h2 class="text-navy-blue-300 text-center headline-2">Cara Menyiapkan Alamat <span class="block">Email Kustom</span></h2>
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
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Masuk ke akun registrar Anda, cari ikon Pengaturan, lalu temukan tab Email.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Penyedia Hosting</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Pilih penyedia hosting email.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Beli Paket Email</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Beli dan siapkan paket email bisnis, lalu konfigurasikan akun email menggunakan nama domain .com Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Klik Buat</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Cukup klik buat, dan selesai!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="flex flex-col gap-10 pt-10 pb-19.5 container">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-2">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Media Sosial dan <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Situs Web</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/resources-hero.jpg') }}" alt="">
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
