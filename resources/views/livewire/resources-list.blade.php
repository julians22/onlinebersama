<div id="resources-scroll" class="flex flex-col gap-y-8 scroll-mt-28">
    <div class="flex items-center-safe justify-between bg-navy-blue-300 rounded-[10px] p-4 flex-col gap-4 lg:gap-0 lg:flex-row">
        <button type="button" class="w-full flex items-center justify-between gap-x-2.5 font-sans text-left font-semibold text-xl rounded-[10px] text-deep-blue-300 leading-7.5 cursor-pointer bg-white px-4 py-3 lg:max-w-100.5">
            Semua Topik
            <img src="{{ asset('images/icons/deep-expand.svg') }}" alt="">
        </button>
        <p class="paragraph-md text-white text-[20px]!">{{ $posts->lastItem() }} dari {{ $posts->total() }} Sumber Informasi</p>
    </div>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $index => $post)
            <div wire:key="post-{{ $index }}">
                <x-displays.card-resource route="{{ route('resources.show', $post->slug) }}">{{ $post->title }}</x-displays.card-resource>
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
