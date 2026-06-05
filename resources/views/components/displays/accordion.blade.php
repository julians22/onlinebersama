<div x-data="{ open: false, last: @json($last), toggleAccordion() {
    this.open = !this.open;
    if (this.open) {
        this.$nextTick(() => {
            this.$refs.content.style.maxHeight = this.$refs.content.scrollHeight + 'px';
        });
    } else {
        this.$refs.content.style.maxHeight = null;
    }
} }" :class="last ? 'border-y-3' : 'border-t-3'" class="border-mint-300 border-t-3">
    <div :class="open ? 'gap-4' : 'gap-0'" class="flex flex-col py-11">
        {{-- Title & Toggle --}}
        <div class="flex text-left gap-4">
            <h2 :class="open ? 'py-3.5' : 'py-0'" class="w-full text-navy-blue-300 transition-all duration-300 ease-in-out subheadline-2 text-[26px]! md:text-[36px]!">{{ $question }}</h2>
            <div class="flex items-center shrink-0">
                <button x-show="!open" data-analytics-name="expand | {{ $dataAnalytics }}" type="button" class="cursor-pointer" @click="toggleAccordion">
                    <x-icons.plus width="36" height="36" fill="#1A2E47" />
                </button>
                <button x-show="open" data-analytics-name="collapse | {{ $dataAnalytics }}" type="button" class="cursor-pointer" @click="toggleAccordion">
                    <x-icons.minus x-cloak width="36" height="36" fill="#1A2E47" />
                </button>
            </div>
        </div>
        {{-- Body/Content --}}
        <div x-ref="content" class="max-h-0 overflow-hidden transition-all duration-150 ease-in-out">
            <div class="accordion-content">{{ $slot }}</div>
        </div>
    </div>
</div>
