@extends('app')

@section('title', 'Homepage')

@section('content')

<main>
    <section class="relative">
        <img class="w-full h-170 object-cover aspect-48/17" src="{{ asset('images/homepage-hero.jpg') }}" alt="Home Hero">
        <div class="top-0 left-1/2 absolute flex items-end py-19.5 size-full -translate-x-1/2 container">
            <div class="space-y-12 text-white">
                <h1 class="headline-1">
                    Di Mana
                    <span class="block mt-2.5 text-[132px]">Dunia</span>
                    <span class="block mt-10 text-[132px]">Menemukanmu</span>
                </h1>
                <p class="max-w-156 leading-8.5! paragraph-md">Nama domain .com membantu orang-orang menemukan dan memercayai Anda</p>
            </div>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="flex flex-col justify-center items-center gap-6 py-22 container">
            <h2 class="text-white subheadline-2">Temukan Nama Domain .com</h2>
            <img src="{{ asset('images/ns-search.png') }}">
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="py-10 container">
            <h2 class="mb-11.25 text-navy-blue-300 text-center headline-1">Bagaimana Cara Menggunakan .com?</h2>
            <div x-data="{ active: 'social' }" class="flex gap-8">
                <x-displays.card-grow active="email" route="email" image="images/brand-1.jpg">
                    Email
                </x-displays.card-grow>
                <x-displays.card-grow active="social" route="social-media" image="images/brand-2.jpg">
                    Media Sosial dan <span class="block">E-Commerce</span>
                </x-displays.card-grow>
                <x-displays.card-grow active="websites" route="websites" image="images/brand-3.jpg">
                    Situs Web
                </x-displays.card-grow>
            </div>
        </div>
        <div class="relative">
            <img class="mx-auto" src="{{ asset('images/placeholder-video-how.jpg') }}" alt="">
            <button type="button" class="top-1/2 left-1/2 z-10 absolute -translate-x-1/2 -translate-y-1/2 cursor-pointer mt-10">
                <img class="size-32.5" src="{{ asset('images/icons/navy-play.svg') }}" alt="">
            </button>
            <div class="top-0 left-1/2 -translate-x-1/2 absolute flex size-full max-w-480 py-40 px-32 2xl:py-50 2xl:px-42">
                <div class="space-y-3.5 max-w-182 min-[1800px]:max-w-213.5">
                    <h2 class="text-navy-blue-300 headline-1">Bukan Sekadar Domain. Melainkan Suatu Pernyataan.</h2>
                    <p class="max-w-140 text-deep-blue-300 leading-8! paragraph-md">Tinggalkan jejak Anda dan bangun merek tepercaya dengan .com.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-blue-single pt-11.5 pb-19.5">
        <div class="container">
            <div class="flex flex-col gap-8 mx-auto max-w-250">
                <div class="space-y-2 text-white text-center">
                    <h2 class="headline-1">Mengapa .com?</h2>
                    <p class="paragraph-md">Nama domain .com dapat digunakan di berbagai platform, tempat, dan kesempatan.</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="gap-4 grid grid-cols-3">
                        <div class="space-y-3 bg-navy-blue-500 p-6 rounded-[10px]">
                            <h3 class="text-vibrant-yellow-300 subheadline-3">Universal</h3>
                            <p class="text-white leading-7.5! paragraph-md">Nama domain .com dipahami semua orang, di mana pun.</p>
                        </div>
                        <div class="space-y-3 bg-navy-blue-500 p-6 rounded-[10px]">
                            <h3 class="text-vibrant-yellow-300 subheadline-3">Tepercaya</h3>
                            <p class="text-white leading-7.5! paragraph-md">Domain yang dipercaya perusahaan global dan merchant lokal.</p>
                        </div>
                        <div class="space-y-3 bg-navy-blue-500 p-6 rounded-[10px]">
                            <h3 class="text-vibrant-yellow-300 subheadline-3">Diakui</h3>
                            <p class="text-white leading-7.5! paragraph-md">.com diakui oleh bisnis dan konsumen di seluruh dunia.</p>
                        </div>
                    </div>
                    <div class="relative rounded-[10px] overflow-hidden">
                        <img class="w-full" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                        <button type="button" class="top-1/2 left-1/2 absolute size-19.5 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                            <img class="size-19.5" src="{{ asset('images/icons/white-play-rounded.svg') }}" alt="">
                        </button>
                        <div class="bottom-0 left-0 absolute p-8">
                            <div class="space-y-4 text-white">
                                <h4 class="font-extrabold! subheadline-3">IKAT Indonesia</h4>
                                <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="px-10 py-3 font-bold btn-primary">Lihat Kisah Usaha Kecil</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="pt-10 pb-19.5 container">
            <h2 class="mb-10 text-navy-blue-300 text-center headline-1">Tinggalkan Jejak Anda di Dunia Maya</h2>
            <div class="flex flex-col gap-6 mx-auto max-w-208">
                <div class="top-40 sticky card-stack">
                    <x-displays.card-stack number="1" title="Lebih Mudah Ditemukan" image="images/homepage-editorial-1.jpg">
                        Nama domain .com membantu memudahkan pelanggan menemukan bisnis secara online.
                    </x-displays.card-stack>
                </div>
                <div class="top-60 sticky card-stack">
                    <x-displays.card-stack number="2" title="Tampil Beda Secara Online" image="images/homepage-editorial-2.jpg">
                        Nama domain .com dapat membantu meningkatkan visibilitas bisnis.
                    </x-displays.card-stack>
                </div>
                <div class="top-86 sticky card-stack">
                    <x-displays.card-stack number="3" title="Tingkatkan Kredibilitas Anda" image="images/homepage-editorial-3.jpg">
                        Nama domain .com dapat membantu usaha kecil terlihat lebih profesional.
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-10 py-20 container-smaller">
        <h2 class="text-navy-blue-300 text-center headline-1">Tanya Jawab</h2>
        <div class="flex flex-col">
            <x-displays.accordion question="Mengapa saya harus memilih .com?">
                <p>Selama lebih dari 40 tahun, .com telah menjadi pilihan universal, tepercaya, dan diakui bisnis dari berbagai skala. .com adalah simbol kepercayaan - tempat tepercaya dan diakui untuk membangun basis online bisnis Anda.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Apa itu nama domain?">
                <p>Nama domain adalah alamat online unik dan kustom (misalnya, contoh.com) yang dapat digunakan untuk mengarahkan orang langsung ke eksistensi online (seperti situs web atau halaman media sosial), dan sebagai alamat email kustom.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Apakah nama domain harus berupa nama bisnis saya?">
                <div class="flex flex-col gap-4">
                    <p>Nama domain dapat mewakili apa pun yang diinginkan, baik bisnis, slogan, nama pribadi, maupun judul proyek yang sedang Anda kerjakan.</p>
                    <p>Pertimbangkan untuk menambahkan lokasi atau kata-kata deskriptif untuk membantu menyampaikan apa yang membuat bisnis, ide, atau proyek Anda unik. Terlepas dari bagaimana Anda menggunakan nama domain nantinya, Anda harus menciptakan alamat web yang mudah diingat dan konsisten agar pelanggan dapat menemukan Anda secara online.</p>
                </div>
            </x-displays.accordion>
            <x-displays.accordion question="Jika saya membeli nama domain, apakah nama tersebut akan menjadi milik saya selamanya?">
                <p>Secara teknis, Anda “mendaftarkan” nama domain untuk jangka waktu tertentu (biasanya 1-10 tahun), bukan “membeli”. Artinya, selama Anda terus memperpanjang penggunaan nama domain tersebut, Anda akan tetap memiliki kendali eksklusif atasnya. Jika Anda berencana menggunakan nama domain untuk jangka panjang, pertimbangkan untuk mengatur “perpanjangan otomatis” melalui registrar.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Bagaimana cara mendapatkan nama domain .com?">
                <p>Anda dapat mendaftarkan nama domain .com sendiri melalui registrar atau peritel pilihan Anda. Jika Anda membutuhkan bantuan dalam menentukan nama domain yang tepat untuk ide atau bisnis, alat bantu pencarian nama domain yang didukung AI kami yang tersedia gratis, NameStudio, dapat membantu Anda menghasilkan berbagai pilihan berdasarkan kata kunci dan frasa deskriptif.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Apa saja cara yang dapat saya lakukan untuk menggunakan nama domain?">
                <div class="flex flex-col gap-4">
                    <p>Nama domain .com tidak hanya diperuntukkan bagi situs web. Ada banyak cara untuk memanfaatkan nama domain .com secara maksimal, seperti penerusan nama domain.</p>
                    <p>Dengan meneruskan nama domain  ke media sosial atau halaman e-commerce, Anda dapat menciptakan pengalaman yang personal bagi pelanggan dalam menemukan bisnis atau toko online Anda. Anda juga dapat menggunakan nama domain sebagai alamat email kustom, yang dapat membantu bisnis Anda terlihat lebih profesional.</p>
                </div>
            </x-displays.accordion>
            <x-displays.accordion question="Mengapa perlu nama domain .com jika sudah punya akun media sosial?">
                <p>Jika bisnis Anda memiliki halaman media sosial, permudah pencarian dengan meneruskan alamat web .com kustom yang mudah diingat ke halaman tersebut. Dengan begitu, begitu sudah siap membangun situs web, Anda akan memiliki nama domain .com yang sudah mapan dan dikenal pelanggan, serta dapat berkembang seiring dengan kemajuan bisnis Anda.</p>
            </x-displays.accordion>
            <x-displays.accordion question="Apa saja manfaat memiliki nama domain .com jika saya sudah memiliki ccTLD?" :last="true">
                <p>Jika Anda memiliki nama domain tingkat atas kode negara (ccTLD), Anda dapat memperluas jangkauan bisnis dengan memasangkannya dengan nama domain .com yang sesuai. Sebagai contoh, jika Anda menggunakan nama domain ccTLD yang sudah ada untuk situs web, Anda dapat meneruskan nama domain .com ke situs web tersebut. Sekarang pelanggan dapat menemukan Anda saat mengetik nama domain .com atau ccTLD Anda.</p>
            </x-displays.accordion>
        </div>
        <div class="flex justify-center">
            <a href="#" class="px-10 py-3 font-bold btn-secondary">Ketahui Selengkapnya</a>
        </div>
    </section>
</main>

@endsection
