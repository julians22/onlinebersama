<div id="resources-scroll" class="flex flex-col gap-y-8 scroll-mt-28">
    <div class="hidden">
        {{ $selectedTopic }} | {{ $selectedTopicLabel }}
    </div>
    <div class="flex items-center-safe justify-between bg-navy-blue-300 rounded-[10px] p-4 flex-col gap-4 lg:gap-0 lg:flex-row">
        <div
            data-analytics-name="pulldown filter | All Topics"
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
                <button x-on:click="$wire.setTopic(''); openDropdown = false;">{{ 'Semua Topik' }}</button>
                @foreach ($topics as $topic)
                    <button x-on:click="$wire.setTopic('{{ $topic['slug'] }}'); openDropdown = false;">{{ $topic['name'] }}</button>
                @endforeach
            </div>
        </div>
        <p class="paragraph-md text-white text-[20px]!">{{ $posts->lastItem() ?? '0' }} dari {{ $posts->total() }} Sumber Informasi</p>
    </div>
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $index => $post)
            <div data-analytics-level3="card-{{ $index + 1 }}" wire:key="post-{{ $index }}">
                <x-displays.card-resource
                    data-analytics="{{ $post->data_analytics ?? $post->title }}"
                    :tags="$post->topics->pluck('name')->toArray()"
                    :image="$post->thumbnail_file_name"
                    route="{{ route('resources.handle_second_route', $post->route_tools) }}">
                    {{ $post->title }}
                </x-displays.card-resource>
            </div>
        @endforeach
    </div>
    <div
        data-analytics-name="sequence | <1 2 3 4>">
        {{ $posts->links(data: ['scrollTo' => '#resources-scroll']) }}
    </div>
</div>

@push('scripts')

<script>
    const checkResolution = () => {
        const isMobile = window.innerWidth < 768;
        const currentPaginate = @this.get('paginate');
        const newPaginate = isMobile ? 3 : 6;

        if (currentPaginate !== newPaginate) {
            @this.call('updatePaginate', newPaginate);
        }
    }

    setTimeout(() => { checkResolution() }, 1)
</script>

@endpush
