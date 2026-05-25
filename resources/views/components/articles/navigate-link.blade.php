<div class="flex flex-col">
    <div class="hidden flex-col gap-3 lg:flex">
        <div class="anchor-link">
            {{ $slot }}
        </div>
    </div>
    <div x-data="{ openDropdown: false }" class="block w-full relative lg:hidden">
        <button type="button" class="select-dropdown" @click="openDropdown = !openDropdown">
            Navigasi Halaman Ini
            <span class="transition-all duration-300 ease-in-out" :class="openDropdown ? '-rotate-180' : 'rotate-0'">
                <x-icons.small-arrow width="12" height="8" fill="#2A3C46" />
            </span>
        </button>
        <div x-cloak x-show="openDropdown" class="option-dropdown" @click.outside="openDropdown = false" @click="if ($event.target.tagName === 'A') openDropdown = false">
            {{ $slot }}
        </div>
    </div>
</div>
