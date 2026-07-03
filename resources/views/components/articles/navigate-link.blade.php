@props(['article' => false])

<div class="flex flex-col">
    <div class="hidden flex-col gap-3 md:flex">
        <div class="anchor-link">
            {{ $slot }}
        </div>
    </div>
    <div x-data="{ openDropdown: false }" @class([
        'rounded-[10px] overflow-hidden border border-light-gray-500' => $article,
        'block w-full relative md:hidden',
    ])>
        <button data-analytics-name="expand Navigate this Page" type="button" @class([
            'select-dropdown' => !$article,
            'select-dropdown-article' => $article
        ]) @click="openDropdown = !openDropdown">
            Navigasi Halaman Ini
            <span class="transition-all duration-300 ease-in-out" :class="openDropdown ? '-rotate-180' : 'rotate-0'">
                <x-icons.small-arrow width="12" height="8" fill="#2A3C46" />
            </span>
        </button>
        <div x-cloak x-show="openDropdown" @class([
            'option-dropdown' => !$article,
            'option-dropdown-article' => $article
        ]) class="option-dropdown-article" @click.outside="openDropdown = false" @click="if ($event.target.tagName === 'A') openDropdown = false">
            {{ $slot }}
        </div>
    </div>
</div>
