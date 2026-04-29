<header x-data="{ open: false }" class="sticky z-50 top-0 right-0 w-full">
    {{-- Navigation Menu --}}
    <nav class="nav-misc">
        <div class="container flex justify-between items-center gap-2.5 py-2 lg:py-5">
            <div class="flex items-center gap-3.5">
                <button type="button" class="block size-6 cursor-pointer lg:hidden">
                    <img src="{{ asset('icons/white-burger.svg') }}" alt="">
                </button>
                <a href="{{ route('index') }}">
                    <img class="w-20 lg:w-31.5" src="{{ asset('images/logo-com-white.svg') }}" alt="OnlineBersama">
                </a>
            </div>
            <div class="flex items-center gap-x-10">
                <ul class="hidden gap-x-10 lg:flex">
                    <li><a href="#" class="font-medium leading-6 text-white text-xl">Why .com?</a></li>
                    <li>
                        <button type="button" @click="open = !open" class="flex items-center gap-1.5 cursor-pointer font-medium leading-6 text-white text-xl">
                            How Do I Use a .com?
                            <img class="transition-all duration-300 ease-in-out" :class="open ? '-rotate-180' : 'rotate-0'" src="{{ asset('icons/white-arrow-down.svg') }}">
                        </button>
                    </li>
                    <li><a href="#" class="font-medium leading-6 text-white text-xl">Learning Hub</a></li>
                </ul>
                <a href="{{ route('find') }}" class="btn-primary text-navy-blue-300 px-4 py-0.5 lg:px-6 lg:py-2">
                    Find a <span class="font-bold">.com</span>
                </a>
            </div>
        </div>
    </nav>
    {{-- Dropdown Menu --}}
    <div class="relative z-[-1]">
        <div x-cloak class="absolute grid grid-cols-12 w-full transition-all duration-300 ease-in-out bg-white left-0 top-0" :class="open ? 'translate-y-0' : '-translate-y-full'">
            <div class="col-span-9 grid grid-cols-3 h-max gap-10 p-10">
                <a href="{{ route('websites') }}" class="group flex transition-all duration-300 ease-in-out gap-5 p-6 rounded-[10px] min-h-54.25 hover:bg-mint-100">
                    <div class="space-y-4">
                        <h3 class="subheadline-3 text-navy-blue-300">For Websites</h3>
                        <p class="paragraph-sm font-bold text-deep-blue-300">Being easier to find starts with your own .com website.</p>
                    </div>
                    <div class="transition-all duration-300 ease-in-out shrink-0 mt-2.5 opacity-0 group-hover:opacity-100">
                        <img src="{{ asset('icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
                <a href="{{ route('email') }}" class="group flex transition-all duration-300 ease-in-out gap-5 p-6 rounded-[10px] min-h-54.25 hover:bg-mint-100">
                    <div class="space-y-4">
                        <h3 class="subheadline-3 text-navy-blue-300">For Email</h3>
                        <p class="paragraph-sm font-bold text-deep-blue-300">Turn emails into a statement of credibility.</p>
                    </div>
                    <div class="transition-all duration-300 ease-in-out shrink-0 mt-2.5 opacity-0 group-hover:opacity-100">
                        <img src="{{ asset('icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
                <a href="{{ route('social-media') }}" class="group flex transition-all duration-300 ease-in-out gap-5 p-6 rounded-[10px] min-h-54.25 hover:bg-mint-100">
                    <div class="space-y-4">
                        <h3 class="subheadline-3 text-navy-blue-300">For Social Media & E-Commerce</h3>
                        <p class="paragraph-sm font-bold text-deep-blue-300">Get a .com web address for any online presence.</p>
                    </div>
                    <div class="transition-all duration-300 ease-in-out shrink-0 mt-2.5 opacity-0 group-hover:opacity-100">
                        <img src="{{ asset('icons/navy-chevron-right.svg') }}">
                    </div>
                </a>
            </div>
            <div class="col-span-3 flex flex-col gap-4 bg-light-gray-100 w-full p-10">
                <button type="button" class="relative rounded-2xl w-97.5 h-54.25 overflow-hidden cursor-pointer">
                    <img class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 size-14" src="{{ asset('icons/white-play.svg') }}">
                    <img class="size-full object-cover object-top" src="{{ asset('images/placeholder-video-navbar.jpg') }}" alt="Placeholder Video">
                </button>
                <p class="paragraph-sm font-semibold">Featured Video - Startup Experience</p>
            </div>
        </div>
    </div>
</header>
