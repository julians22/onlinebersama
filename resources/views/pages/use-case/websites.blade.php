@extends('app')

@section('title', 'Use Case - Websites')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com untuk Situs Web</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5!">Situs web dengan nama domain .com adalah fondasi yang dapat diandalkan pelanggan Anda untuk menemukan dan berinteraksi secara online seiring perkembangan bisnis Anda.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-websites.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Manfaat Situs Web</h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="card-stack sticky top-40">
                <x-displays.card-stack number="1" title="Berkembang Sesuai Keinginan Anda" image="images/website-editorial-1.jpg" alt="">
                    Ciptakan tempat bagi bisnis Anda untuk berakar dan berkembang sesuai keinginan Anda. Situs web dengan nama domain .com dapat berkembang seiring perkembangan bisnis Anda.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-66">
                <x-displays.card-stack number="2" title="Kendalikan Merek Anda" image="images/website-editorial-2.jpg" alt="">
                    Memiliki situs web dengan nama domain .com memberi Anda ruang untuk membangun merek dan mengendalikan eksistensi online Anda.
                </x-displays.card-stack>
            </div>
            <div class="card-stack sticky top-86">
                <x-displays.card-stack number="3" title="Lebih Mudah Ditemukan" image="images/website-editorial-3.jpg" alt="">
                    Situs web dengan nama domain .com memudahkan pelanggan menemukan Anda. Di situlah dunia akan menemukan Anda.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3 px-10">Temukan Manfaat Lainnya</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="container flex flex-col justify-center items-center gap-10 py-19.5">
            <div class="space-y-10 text-white text-center">
                <h2 class="headline-2">Daftar Periksa Perencanaan Situs Web</h2>
                <p class="paragraph-lg">Bangun rumah online Anda di situs web dengan nama domain .com.</p>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Buat Rencana Pemba-<span class="block">ngunan Situs Web Anda</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pilih dan daftarkan nama domain .com untuk alamat web Anda.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Tentukan tujuan situs web Anda (misalnya, blog, situs e-commerce, brosur online).</p>
                    </div>
                </div>
                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Tentukan Persyaratan Situs Web</h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Tentukan informasi terpenting yang harus ada di situs web Anda sekarang, dan informasi yang dapat ditambahkan nanti.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Cari tahu informasi apa yang akan menarik dan bermanfaat bagi pengunjung Anda (misalnya, informasi kontak, deskripsi produk).</p>
                    </div>
                </div>
                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Kelola Situs <span class="block">Web Anda</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pikirkan cara pengunjung menemukan situs web Anda, dan cantumkan alamat web Anda di semua lokasi yang memungkinkan.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Pahami siapa saja yang akan mengunjungi situs web Anda menggunakan alat bantu untuk memudahkan analisis lalu lintas situs web Anda.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="#" class="btn-primary font-bold py-3 px-10">Telusuri Daftar Periksa Lengkap</a>
            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="sticky top-32 flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">Cara Membangun Situs <span class="block">Web Profesional</span></h2>
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
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Pertama, daftarkan nama domain .com melalui registrar pilihan Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Platform Hosting</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Selanjutnya, pilih platform hosting, lalu pilih paket situs web yang sesuai.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Pilih Paket dan Template</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Pilih paket dan template sesuai tujuan, anggaran, dan gaya Anda.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Rancang situs web Anda</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Buat desain situs web dan halaman yang Anda butuhkan.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Klik Buat</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Setelah siap, tinjau kembali, lalu publikasikan situs web Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">Bagaimana Cara Menggunakan .com?</h2>
            <div class="grid grid-cols-2 gap-8">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Media Sosial dan <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/resources-hero.jpg') }}" alt="">
        <div class="absolute container top-0 left-1/2 -translate-x-1/2 flex flex-col gap-6 justify-center size-full">
            <h2 class="headline-1 text-navy-blue-300">Mencari sumber <span class="block">informasi lainnya?</span></h2>
            <p class="paragraph-md text-deep-blue-300 max-w-150 leading-8.5!">Jelajahi Panduan Belajar untuk menemukan semua artikel, video, dan banyak lagi tentang cara menggunakan domain .com.</p>
            <a href="#" class="btn-secondary w-max font-bold py-3 px-6">Kunjungi Panduan Belajar</a>
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
