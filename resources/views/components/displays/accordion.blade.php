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
        <div class="flex gap-4">
            <h2 :class="open ? 'py-3.5' : 'py-0'" class="w-full text-navy-blue-300 transition-all duration-300 ease-in-out subheadline-2">{{ $question }}</h2>
            <div class="flex items-center shrink-0">
                <button type="button" @click="toggleAccordion" class="cursor-pointer">
                    <img x-show="!open" src="{{ asset('images/icons/deep-plus.svg') }}">
                    <img x-show="open" x-cloak src="{{ asset('images/icons/deep-min.svg') }}">
                </button>
            </div>
        </div>
        {{-- Body/Content --}}
        <div x-ref="content" class="max-h-0 overflow-hidden transition-all duration-150 ease-in-out">
            <div class="accordion-content">{{ $slot }}</div>
        </div>
    </div>
</div>
