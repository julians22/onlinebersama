@props(['dataTooltip'])

<span x-data="{ open: false }" class="inline-block relative">
    <span
        x-ref="trigger"
        @mouseenter="window.matchMedia('(pointer: fine)').matches && (open = true)"
        @mouseleave="window.matchMedia('(pointer: fine)').matches && (open = false)"
        @click="window.matchMedia('(pointer: coarse)').matches && (open = !open)"
        @click.outside="open = false"
        class="tooltip-trigger"
    >
    {{ $slot }}
    </span>
    <span
        x-show="open"
        x-anchor.bottom.offset.4="$refs.trigger"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute z-50 w-73.75 max-w-[85vw] p-4 rounded-[10px] text-[14px] text-black bg-[#e0f2ec] font-semibold leading-5 shadow-md"
        style="display: none;"
    >
        {{ $dataTooltip }}
    </span>
</span>
