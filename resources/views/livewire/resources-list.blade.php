<div id="resources-scroll" class="flex flex-col gap-y-8 scroll-mt-28">
    <div class="flex items-center-safe justify-between bg-navy-blue-300 rounded-[10px] p-4">
        <button type="button" class="max-w-100.5 w-full flex items-center justify-between gap-x-2.5 font-sans text-left font-semibold text-xl rounded-[10px] text-deep-blue-300 leading-7.5 cursor-pointer bg-white px-4 py-3">
            Semua Topik
            <img src="{{ asset('images/icons/deep-expand.svg') }}" alt="">
        </button>
        <p class="paragraph-md text-white">6 dari 15 Sumber Informasi</p>
    </div>
    <div class="grid grid-cols-3 gap-8">
        @foreach($posts as $index => $post)
            <div wire:key="post-{{ $index }}">
                <x-displays.card-resource route="{{ route('resources.show', $post->slug) }}">{{ $post->title }}</x-displays.card-resource>
            </div>
        @endforeach
    </div>
    {{ $posts->links(data: ['scrollTo' => '#resources-scroll']) }}
</div>
