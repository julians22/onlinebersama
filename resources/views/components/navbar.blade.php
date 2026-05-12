<header
    data-analytics-level1="topnav"
    x-data="{ open: false }" class="top-0 right-0 z-50 sticky w-full">
    {{-- Navigation Menu --}}
    <nav class="nav-misc"
        data-analytics-level1="topnav"
    >
        <div class="flex justify-between items-center gap-2.5 py-2 lg:py-5 container">
            <div class="flex items-center gap-3.5">
                <button type="button" class="lg:hidden block size-6 cursor-pointer">
                    <img src="{{ asset('images/icons/white-burger.svg') }}" alt="">
                </button>
                <a
                    data-analytics-name="logo | .com"
                    href="{{ route('index') }}">
                    <img class="w-20 lg:w-31.5" src="{{ asset('images/logo-com-white.svg') }}" alt="OnlineBersama">
                </a>
            </div>
            <div class="flex items-center gap-x-10">
                <ul class="hidden lg:flex lg:gap-x-4 xl:gap-x-10">
                    <li>
                        <a
                            data-analytics-name="{{ request()->routeIs('index') ? 'anchor | Why .com?' : 'text | Why .com?' }}"
                            href="{{ request()->routeIs('index') ? '' : route('index') }}#mengapa-com"
                            class="nav-link">Mengapa .com?</a>
                    </li>
                    <li>
                        <button
                            data-analytics-name="hover expand | How Do I use a .com?"
                            type="button" @click="open = !open" class="nav-link nav-dropdown">
                            Bagaimana Cara Menggunakan .com?
                            <img class="transition-all duration-300 ease-in-out" :class="open ? '-rotate-180' : 'rotate-0'" src="{{ asset('images/icons/white-arrow-down.svg') }}">
                        </button>
                    </li>
                    <li><a
                        data-analytics-name="text | Learning Hub"
                        href="{{ route('resources') }}" class="nav-link">Panduan Belajar</a></li>
                </ul>
                <a
                    data-analytics-name="button | Find a .com"
                    href="{{ route('find') }}" class="px-4 lg:px-6 py-0.5 lg:py-2 font-medium text-navy-blue-300 btn-primary">
                    Temukan .com Anda</span>
                </a>
            </div>
        </div>
    </nav>
    {{-- Dropdown Menu --}}
    <div class="z-[-1] relative"
        data-analytics-level2="topnav expanded"
    >
        <div x-cloak class="top-0 left-0 absolute grid grid-cols-12 bg-white w-full transition-all duration-300 ease-in-out" :class="open ? 'translate-y-0' : '-translate-y-full'">
            <div class="gap-10 grid grid-cols-3 col-span-9 p-10 h-max">
                <a
                    data-analytics-name="hover | For Websites"
                    href="{{ route('websites') }}" class="group flex gap-5 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                    <div class="space-y-4">
                        <h3 class="text-navy-blue-300 subheadline-3">.com untuk Situs Web</h3>
                        <p class="font-bold text-deep-blue-300 paragraph-sm">Agar lebih mudah ditemukan, mulailah menggunakan situs web .com Anda sendiri.</p>
                    </div>
                    <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                        <img src="{{ asset('images/icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
                <a
                    data-analytics-name="hover | For Email"
                    href="{{ route('email') }}" class="group flex gap-5 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                    <div class="space-y-4">
                        <h3 class="text-navy-blue-300 subheadline-3">.com untuk Email</h3>
                        <p class="font-bold text-deep-blue-300 paragraph-sm">Jadikan email sebagai pernyataan kredibilitas.</p>
                    </div>
                    <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                        <img src="{{ asset('images/icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
                <a
                    data-analytics-name="hover | For Social Media & E-Commerce"
                    href="{{ route('social-media') }}" class="group flex gap-5 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                    <div class="space-y-4">
                        <h3 class="text-navy-blue-300 subheadline-3">.com untuk Media Sosial dan E-Commerce </h3>
                        <p class="font-bold text-deep-blue-300 paragraph-sm">Dapatkan alamat web .com untuk eksistensi online Anda.</p>
                    </div>
                    <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                        <img src="{{ asset('images/icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
            </div>
            <div class="flex flex-col gap-4 col-span-3 bg-light-gray-100 p-10 w-full">
                <button
                    data-analytics-name="video image | Startup Experience"
                    type="button" class="relative rounded-2xl w-full max-w-97.5 h-54.25 overflow-hidden cursor-pointer">
                    <span
                        data-analytics-name="play button | Startup Experience"
                        class="top-1/2 left-1/2 absolute size-14 hover:scale-105 -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                        <img class="size-full" src="{{ asset('images/icons/white-play.svg') }}">
                    </span>
                    <img class="size-full object-cover object-top" src="{{ asset('images/placeholder-video-navbar.jpg') }}" alt="Placeholder Video">
                </button>
                <p class="font-semibold paragraph-sm">Featured Video - Startup Experience</p>
            </div>
        </div>
    </div>
</header>
