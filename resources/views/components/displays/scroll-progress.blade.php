<div x-data="scrollProgress" x-init="init()" x-cloak class="fixed inset-x-0 top-11 z-50 sm:top-13 lg:top-28 min-[1200px]:top-20!">
    <div class="h-1.5 bg-magenta-300 lg:h-2.5" :style="`width: ${percent}%`"></div>
</div>

@push('scripts')

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('scrollProgress', () => ({
            percent: 0,

            init() {
                window.addEventListener('load', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight
                    let value = (winScroll / height) * 100
                    this.percent = Number.isFinite(value) ? Math.round(value * 10) / 10 : 0
                })

                window.addEventListener('scroll', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight
                    let value = (winScroll / height) * 100
                    this.percent = Number.isFinite(value) ? Math.round(value * 10) / 10 : 0
                })
            },
        }));
    });
</script>

@endpush
