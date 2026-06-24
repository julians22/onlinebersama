<header
    data-analytics-level1="topnav"
    x-data="{ dropdown: false, sidebar: false, expandedDataText: 'click expand | How Do I Use a .com?', collapsedDataText: 'collapse | How Do I Use a .com?' }"
    class="top-0 right-0 z-50 sticky w-full">
    {{-- Navigation Menu --}}
    {{-- Desktop Navigation --}}
    <nav
        data-analytics-level1="topnav"
        class="bg-gradient-nav">
        <div class="container-medium flex justify-between items-center gap-2.5 py-2 sm:py-3 lg:py-5">
            <div class="flex items-center gap-3.5">
                {{-- Toggle Button (Mobile) --}}
                <button
                    data-analytics-name="hamburger expand | topnav"
                    type="button" @click="sidebar = !sidebar" class="lg:hidden block size-6 cursor-pointer">
                    <x-icons.burger width="24" height="24" fill="#fff" />
                </button>
                <a
                    data-analytics-name="logo | .com"
                    href="{{ route('index') }}">
                    <img class="w-20 lg:w-31.5" src="{{ asset('images/logo-com-white.svg') }}" alt="OnlineBersama">
                </a>
            </div>
            <div class="flex items-center gap-x-7.5">
                <ul class="hidden gap-x-4 lg:flex xl:gap-x-8.75">
                    <li class="flex items-center text-right">
                        <a
                            data-analytics-name="{{ request()->routeIs('index') ? 'anchor | Why .com?' : 'text | Why .com?' }}"
                            href="{{ request()->routeIs('index') ? '' : route('index') }}#mengapa-com"
                            class="nav-link">Mengapa .com?</a>
                    </li>
                    <li class="max-w-55 min-[1200px]:max-w-full">
                        <button
                            :data-analytics-name="dropdown ? collapsedDataText : expandedDataText"
                            type="button"@click="dropdown = !dropdown" class="nav-link nav-dropdown text-right">
                            Bagaimana Cara Saya Menggunakan .com?
                            <span :class="dropdown ? '-rotate-180' : 'rotate-0'" class="transition-all duration-300 ease-in-out">
                                <x-icons.arrow width="15" height="7" fill="#fff" />
                            </span>
                        </button>
                    </li>
                    <li class="flex items-center text-right">
                        <a
                            data-analytics-name="text | Learning Hub"
                            href="{{ route('resources.index') }}" class="nav-link">Panduan Belajar</a>
                    </li>
                </ul>
                <a
                    data-analytics-name="button | Find a .com"
                    href="{{ route('find') }}" class="px-4 py-0.5 font-medium text-navy-blue-300 text-[14px] btn-primary lg:text-[19px] lg:px-4 lg:py-2">
                    Temukan .com Anda
                </a>
            </div>
        </div>
    </nav>
    {{-- Dropdown --}}
    <div
        data-analytics-level2="topnav expanded"
        @click.outside="dropdown = false" x-cloak x-show="dropdown" class="z-[-1] relative"
        x-transition:enter="transition-all ease-in-out duration-300"
        x-transition:enter-start="-translate-y-[1100px] xl:-translate-y-[350px]"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition-all ease-in-out duration-300"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-[1100px] xl:-translate-y-[350px]"
    >
        <div class="absolute hidden top-0 left-1/2 -translate-x-1/2 w-full bg-white after:absolute after:top-0 after:right-0 after:w-1/2 after:h-full after:bg-light-gray-100 lg:block">
            <div class="relative z-10 max-w-480 flex bg-white mx-auto lg:flex-col xl:flex-row">
                <div class="grid grid-cols-3 p-5 h-max">
                    <a data-analytics-name="hover | .com for Websites" href="{{ route('websites') }}" class="group flex gap-3.75 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                        <div class="space-y-2">
                            <h3 class="text-navy-blue-300 subheadline-3 text-[26px]! leading-7.5!">.com untuk Situs Web</h3>
                            <p class="text-deep-blue-300 paragraph-sm text-[19px]! font-medium! leading-7!">Agar lebih mudah ditemukan, mulailah menggunakan situs web .com Anda sendiri.</p>
                        </div>
                        <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                            <x-icons.arrow-rounded width="24" height="24" fill="#304D6D" strokeWidth="1" />
                        </div>
                    </a>
                    <a data-analytics-name="hover | .com for Email" href="{{ route('email') }}" class="group flex gap-3.75 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                        <div class="space-y-2">
                            <h3 class="text-navy-blue-300 subheadline-3 text-[26px]! leading-7.5!">.com untuk Email</h3>
                            <p class="text-deep-blue-300 paragraph-sm text-[19px]! font-medium! leading-7!">Jadikan email sebagai pernyataan kredibilitas.</p>
                        </div>
                        <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                            <x-icons.arrow-rounded width="24" height="24" fill="#304D6D" strokeWidth="1" />
                        </div>
                    </a>
                    <a data-analytics-name="hover | .com for Social Media & E-Commerce" href="{{ route('social-media') }}" class="group flex gap-3.75 hover:bg-mint-100 p-6 rounded-[10px] min-h-54.25 transition-all duration-300 ease-in-out">
                        <div class="space-y-2">
                            <h3 class="text-navy-blue-300 subheadline-3 text-[26px]! leading-7.5!">.com untuk Media Sosial dan E-Commerce</h3>
                            <p class="text-deep-blue-300 paragraph-sm text-[19px]! font-medium! leading-7!">Dapatkan alamat web .com untuk eksistensi online Anda.</p>
                        </div>
                        <div class="opacity-0 group-hover:opacity-100 mt-2.5 transition-all duration-300 ease-in-out shrink-0">
                            <x-icons.arrow-rounded width="24" height="24" fill="#304D6D" strokeWidth="1" />
                        </div>
                    </a>
                </div>
                <div class="flex flex-col gap-4 bg-light-gray-100 p-4 w-full xl:max-w-117.5">
                    <button data-analytics-name="video image | Startup Experience" type="button" @click="$store.videoModal.openModal('6331201181112')" class="group relative rounded-2xl w-full aspect-video overflow-hidden cursor-pointer lg:max-w-117.5 xl:max-w-full 2xl:h-54.25">
                        <span data-analytics-name="play button | Startup Experience" class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute size-14 -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                            <x-icons.play width="56" height="56" fill="#fff" />
                        </span>
                        <img class="size-full object-cover object-top" src="{{ asset('images/placeholder-video-navbar.jpg') }}" alt="Placeholder Video">
                    </button>
                    <p class="font-semibold paragraph-sm">Video Unggulan - Startup Experience</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Sidebar (Mobile) --}}
    <div @click.outside="sidebar = false" x-cloak x-show="sidebar"
        data-analytics-level2="hamburger expanded"
        class="fixed top-0 left-0 w-[90%] h-dvh bg-white box-shadow-sm block lg:hidden"
        x-transition:enter="transition-all ease-in-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-all ease-in-out duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
    >
        <div class="flex flex-col">
            <div class="flex justify-between p-6">
                <a
                    data-analytics-name="text | .com"
                    href="{{ route('index') }}">
                    <img class="w-20" src="{{ asset('images/logo-com-blue.svg') }}" alt="">
                </a>
                <button type="button" @click="sidebar = false" class="cursor-pointer">
                    <x-icons.close width="24" height="24" fill="#A7127E" />
                </button>
            </div>
            <div class="flex flex-col h-[calc(100dvh-72px)] overflow-y-auto">
                <div class="sidebar-link">
                    <a
                        data-analytics-name="text | Why .com?"
                        href="{{ request()->routeIs('index') ? '' : route('index') }}#mengapa-com" class="group">
                        Mengapa .com?
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                </div>
                <div class="sidebar-link">
                    <p
                        data-analytics-name="text | How Do I Use a .com?">
                        Bagaimana Cara Saya Menggunakan .com?
                    </p>
                </div>
                <div class="sidebar-list">
                    <a
                        data-analytics-name="text | .com for Websites"
                        href="{{ route('websites') }}" class="group">
                        .com untuk Situs Web
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                    <a
                        data-analytics-name="text | .com for Email"
                        href="{{ route('email') }}" class="group">
                        .com untuk Email
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                    <a
                        data-analytics-name="text | .com for Social Media & E-Commerce"
                        href="{{ route('social-media') }}" class="group">
                        .com untuk Sosial Media dan E-Commerce
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                </div>
                <div class="sidebar-link">
                    <a
                        data-analytics-name="text | Learning Hub"
                        href="{{ route('resources.index') }}" class="group">
                        Panduan Belajar
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                </div>
                <div class="sidebar-link">
                    <a
                        data-analytics-name="text | Find a .com"
                        href="{{ route('find') }}" class="group">
                        Temukan .com Anda
                        <x-icons.arrow-rounded width="24" height="24" fill="#1C1B1F" class="group-hover:opacity-100" />
                    </a>
                </div>
                <div
                    data-analytics-name="video image | Startup Experience"
                    class="border-t-2 border-light-gray-300 flex flex-col gap-4 w-full px-3 py-8 min-[500px]:px-6">
                    <button
                        type="button"
                        @click="$store.videoModal.openModal('6331201181112')"
                        class="group relative rounded-2xl w-full aspect-video overflow-hidden cursor-pointer min-[500px]:max-w-97.5 min-[500px]:h-54.25">
                        <div
                            data-analytics-name="play button | Startup Experience"
                            type="button"
                            class="transition-all duration-300 ease-in-out top-1/2 left-1/2 absolute -translate-x-1/2 -translate-y-1/2 group-hover:scale-110">
                            <x-icons.play width="56" height="56" fill="#fff" />
                        </div>
                        <img
                            data-analytics-name="video image | Startup Experience"
                            class="size-full object-cover object-top" src="{{ asset('images/placeholder-video-navbar.jpg') }}" alt="">
                    </button>
                    <p class="font-sans font-semibold text-[20px]">Video Unggulan - Startup Experience</p>
                </div>
            </div>
        </div>
    </div>
</header>
