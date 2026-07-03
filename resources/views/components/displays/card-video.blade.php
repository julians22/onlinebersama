<div class="card-video">
    <div x-data class="relative">
        <img data-analytics-name="video image {{ $dataAnalytics }}" src="{{ asset($image) }}" alt="{{ $alt }}">
        <div class="overlay-slide desktop">
            <h4 class="subheadline-4">{{ $title }}</h4>
            <p class="paragraph-sm">{{ $slot }}</p>
        </div>
        <button data-analytics-name="play button {{ $dataAnalytics }}" type="button" @click="$store.videoModal.openModal('{{ $videoId }}')" class="group">
            <x-icons.play-rounded width="78" height="78" fill="#fff" class="group-hover:scale-110 transition-all duration-300 ease-in-out" />
        </button>
    </div>
    <div class="overlay-slide mobile">
        <h4 class="subheadline-4 font-medium! md:font-semibold!">{{ $title }}</h4>
        <p class="paragraph-sm">{{ $slot }}</p>
    </div>
</div>
