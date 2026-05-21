<div id="resources-scroll" class="flex flex-col gap-y-8 scroll-mt-28">
    <div class="flex items-center-safe justify-between bg-navy-blue-300 rounded-[10px] p-4 flex-col gap-4 lg:gap-0 lg:flex-row">
        <div
            x-data="{ openDropdown: false }"
            class="lg:max-w-100.5 w-full relative">
            <button
                @click="openDropdown = !openDropdown"
                type="button" class="w-full flex items-center justify-between gap-x-2.5 font-sans text-left font-semibold text-xl rounded-[10px] text-deep-blue-300 leading-7.5 cursor-pointer bg-white px-4 py-3 ">
                {{ $selectedTopicLabel }}
                {{-- <img src="{{ asset('images/icons/deep-expand.svg') }}" alt=""> --}}
                <span>
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.41 3.42706e-05L-2.62268e-07 1.41003L6 7.41003L12 1.41003L10.59 3.38694e-05L6 4.58003L1.41 3.42706e-05Z" fill="#2A3C46"/>
                    </svg>
                </span>
            </button>
            <div x-show="openDropdown"
                @click.outside="openDropdown = false"
                x-cloak
                class="top-full bg-white rounded-[10px] overflow-hidden z-10 mt-1.5 inset-x-0 shadow min-h-10 absolute">
                <div class="flex gap-3 flex-col">
                    <button x-on:click="$wire.setTopic('*'); openDropdown = false;" class=" px-4 py-2 font-sans text-left font-semibold text-xl text-deep-blue-300 leading-7.5 cursor-pointer bg-white hover:bg-mint-300 transition-colors duration-300">{{ 'Semua Topik' }}</button>
                    @foreach ($topics as $topic)
                        <button x-on:click="$wire.setTopic('{{ $topic['slug'] }}'); openDropdown = false;" class=" px-4 py-2 font-sans text-left font-semibold text-xl text-deep-blue-300 leading-7.5 cursor-pointer bg-white hover:bg-mint-300 transition-colors duration-300">{{ $topic['name'] }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <p class="paragraph-md text-white text-[20px]!">{{ $posts->lastItem() ?? '0' }} dari {{ $posts->total() }} Sumber Informasi</p>
    </div>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $index => $post)
            <div wire:key="post-{{ $index }}">
                <x-displays.card-resource :tags="$post->topics->pluck('name')->toArray()" route="{{ route('resources.show', $post->slug) }}">{{ $post->title }}</x-displays.card-resource>
            </div>
        @endforeach
    </div>
    {{ $posts->links(data: ['scrollTo' => '#resources-scroll']) }}
</div>

@push('scripts')

<script>
    window.addEventListener('resize', () => {
        const isMobile = window.innerWidth < 768;
        const currentPaginate = @this.get('paginate');
        const newPaginate = isMobile ? 3 : 6;

        if (currentPaginate !== newPaginate) {
            @this.call('updatePaginate', newPaginate);
        }
    })
</script>

@endpush
