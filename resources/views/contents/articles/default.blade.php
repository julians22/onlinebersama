<article class="py-10">
    <div class="mx-auto mt-5 min-h-96 container">
        <h1 class="text-navy-blue-400 headline-1">{{ $post->title }}</h1>
        <div class="flex items-center gap-4 mb-6 font-serif text-gray-500 text-sm">
            <span>{{ $post->created_at->format('F j, Y') }}</span>
            <span>•</span>
            <span>{{ $post->read_time }}</span>
        </div>
        <div class="max-w-none prose">
            Konten default untuk artikel tanpa template khusus. Anda dapat mengedit tampilan ini di <code>resources/views/contents/show.blade.php</code>.
        </div>
    </div>
</article>
