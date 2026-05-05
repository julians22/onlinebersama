@extends('app')

@section('title', 'Use Case - Websites')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="flex justify-between items-center gap-20 py-15.5 container">
            <div class="space-y-4">
                <h1 class="text-navy-blue-300 headline-1">.com untuk Situs Web</h1>
                <p class="text-deep-blue-300 leading-8.5! paragraph-md">Situs web dengan nama domain .com adalah fondasi yang dapat diandalkan pelanggan Anda untuk menemukan dan berinteraksi secara online seiring perkembangan bisnis Anda.</p>
            </div>
            <div class="relative rounded-[10px] overflow-hidden shrink-0">
                <img class="box-shadow-sm w-156 object-cover aspect-video" src="{{ asset('images/uc-websites.jpg') }}" alt="">
                <div class="top-0 left-0 absolute bg-black/30 size-full"></div>
                <button type="button" class="top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="py-10 container">
        <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Manfaat Situs Web</h2>
        <div class="flex flex-col gap-6 mx-auto max-w-208">
            <div class="top-40 sticky card-stack">
                <x-displays.card-stack number="1" title="Berkembang Sesuai Keinginan Anda" image="images/website-editorial-1.jpg" alt="">
                    Ciptakan tempat bagi bisnis Anda untuk berakar dan berkembang sesuai keinginan Anda. Situs web dengan nama domain .com dapat berkembang seiring perkembangan bisnis Anda.
                </x-displays.card-stack>
            </div>
            <div class="top-66 sticky card-stack">
                <x-displays.card-stack number="2" title="Kendalikan Merek Anda" image="images/website-editorial-2.jpg" alt="">
                    Memiliki situs web dengan nama domain .com memberi Anda ruang untuk membangun merek dan mengendalikan eksistensi online Anda.
                </x-displays.card-stack>
            </div>
            <div class="top-86 sticky card-stack">
                <x-displays.card-stack number="3" title="Lebih Mudah Ditemukan" image="images/website-editorial-3.jpg" alt="">
                    Situs web dengan nama domain .com memudahkan pelanggan menemukan Anda. Di situlah dunia akan menemukan Anda.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="px-10 py-3 font-bold btn-secondary">Temukan Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="flex flex-col justify-center items-center gap-10 py-19.5 container">
            <div class="space-y-10 text-white text-center">
                <h2 class="headline-2">Daftar Periksa Perencanaan Situs Web</h2>
                <p class="paragraph-lg">Bangun rumah online Anda di situs web dengan nama domain .com.</p>
            </div>
            <div class="gap-8 grid grid-cols-3">
                <div class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <img class="size-10" src="{{ asset('images/icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Buat Rencana Pemba-<span class="block">ngunan Situs Web Anda</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pilih dan daftarkan nama domain .com untuk alamat web Anda.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Tentukan tujuan situs web Anda (misalnya, blog, situs e-commerce, brosur online).</p>
                    </div>
                </div>
                <div class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <img class="size-10" src="{{ asset('images/icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Tentukan Persyaratan Situs Web</h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Tentukan informasi terpenting yang harus ada di situs web Anda sekarang, dan informasi yang dapat ditambahkan nanti.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Cari tahu informasi apa yang akan menarik dan bermanfaat bagi pengunjung Anda (misalnya, informasi kontak, deskripsi produk).</p>
                    </div>
                </div>
                <div class="gap-4 grid grid-rows-subgrid row-span-3 bg-white p-4 rounded-[10px]">
                    <div class="flex flex-col justify-center items-center gap-2.5 bg-mint-300 p-6 rounded-lg text-deep-blue-300 text-center">
                        <img class="size-10" src="{{ asset('images/icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Kelola Situs <span class="block">Web Anda</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 border-mint-300 border-b-4 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pikirkan cara pengunjung menemukan situs web Anda, dan cantumkan alamat web Anda di semua lokasi yang memungkinkan.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('images/icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pahami siapa saja yang akan mengunjungi situs web Anda menggunakan alat bantu untuk memudahkan analisis lalu lintas situs web Anda.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="#" class="px-10 py-3 font-bold btn-primary">Telusuri Daftar Periksa Lengkap</a>
            </div>
        </div>
    </section>
    <section class="flex items-center gap-44 py-19.5 container">
        <div class="top-32 sticky flex flex-col gap-11.5">
            <h2 class="text-navy-blue-300 text-center headline-2">Cara Membangun Situs <span class="block">Web Profesional</span></h2>
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
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Pertama, daftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Platform Hosting</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Selanjutnya, pilih platform hosting, lalu pilih paket situs web yang sesuai.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Paket dan Template</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Pilih paket dan template sesuai tujuan, anggaran, dan gaya Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Rancang situs web Anda</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Buat desain situs web dan halaman yang Anda butuhkan.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="flex justify-center items-center border-4 border-mint-300 rounded-full size-12.5 font-semibold text-[32px] text-navy-blue-300 shrink-0">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Klik Buat</h3>
                    <p class="text-deep-blue-300 leading-9! paragraph-md">Setelah siap, tinjau kembali, lalu publikasikan situs web Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="flex flex-col gap-10 pt-10 pb-19.5 container">
            <h2 class="text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div class="gap-8 grid grid-cols-2">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Media Sosial dan <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/resources-hero.jpg') }}" alt="">
        <div class="top-0 left-1/2 absolute flex flex-col justify-center gap-6 size-full -translate-x-1/2 container">
            <h2 class="text-navy-blue-300 headline-1">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="max-w-150 text-deep-blue-300 leading-8.5! paragraph-md">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
            <a href="#" class="px-6 py-3 w-max font-bold btn-secondary">Kunjungi Panduan Belajar</a>
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
