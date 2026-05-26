<div id="resources-scroll" class="flex flex-col gap-y-8 scroll-mt-28">
    <div class="flex items-center-safe justify-between bg-navy-blue-300 rounded-[10px] p-4 flex-col gap-4 lg:gap-0 lg:flex-row">
        <div
            x-data="{ openDropdown: false }"
            class="lg:max-w-100.5 w-full relative">
            <button
                type="button"
                class="select-dropdown"
                @click="openDropdown = !openDropdown"
            >
                {{ $selectedTopicLabel }}
                <span class="transition-all duration-300 ease-in-out" :class="openDropdown ? '-rotate-180' : 'rotate-0'">
                    <x-icons.small-arrow width="12" height="8" fill="#2A3C46" />
                </span>
            </button>
            <div x-cloak x-show="openDropdown"
                class="option-dropdown"
                @click.outside="openDropdown = false"
            >
                <button x-on:click="$wire.setTopic('*'); openDropdown = false;">{{ 'Semua Topik' }}</button>
                @foreach ($topics as $topic)
                    <button x-on:click="$wire.setTopic('{{ $topic['slug'] }}'); openDropdown = false;">{{ $topic['name'] }}</button>
                @endforeach
            </div>
        </div>
        <p class="paragraph-md text-white text-[20px]!">{{ $posts->lastItem() ?? '0' }} dari {{ $posts->total() }} Sumber Informasi</p>
    </div>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $index => $post)
            <div wire:key="post-{{ $index }}">
                <x-displays.card-resource
                    :tags="$post->topics->pluck('name')->toArray()"
                    :image="$post->slug"
                    route="{{ route('resources.show', $post->slug) }}"
                >{{ $post->title }}</x-displays.card-resource>
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
