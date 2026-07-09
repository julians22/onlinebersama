@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
        JS
        : '';

    // Sliding window pagination: current page selalu punya tetangga kiri-kanan
    $currentPage = $paginator->currentPage();
    $lastPage = $paginator->lastPage();
    $siblingCount = 1;  // jumlah nomor di kiri & kanan current page
    $boundaryCount = 1; // jumlah nomor yang selalu tampil di ujung awal/akhir

    $fixedCount = $boundaryCount + $siblingCount * 2 + 1; // ukuran window standar (4)
    $totalNumbers = $boundaryCount * 2 + $siblingCount * 2 + 3;

    if ($totalNumbers >= $lastPage) {
        $pages = range(1, $lastPage);
    } else {
        $leftSibling = max($currentPage - $siblingCount, 1);
        $rightSibling = min($currentPage + $siblingCount, $lastPage);

        $showLeftDots = $leftSibling > $boundaryCount + 2;
        $showRightDots = $rightSibling < $lastPage - $boundaryCount - 1;

        if (! $showLeftDots && $showRightDots) {
            // Dekat awal: window meluas sampai currentPage + sibling, minimal $fixedCount
            $leftCount = max($fixedCount, $currentPage + $siblingCount);
            $pages = array_merge(range(1, $leftCount), ['...'], [$lastPage]);
        } elseif ($showLeftDots && ! $showRightDots) {
            // Dekat akhir: window meluas mulai dari currentPage - sibling, minimal $fixedCount
            $rightStart = min($lastPage - $fixedCount + 1, $currentPage - $siblingCount);
            $pages = array_merge([1], ['...'], range($rightStart, $lastPage));
        } elseif ($showLeftDots && $showRightDots) {
            $pages = array_merge([1], ['...'], range($leftSibling, $rightSibling), ['...'], [$lastPage]);
        } else {
            $pages = range(1, $lastPage);
        }
    }

    // Bentuk ulang $elements ke format yang dipakai loop di bawah (array [page => url] atau string '...')
    $elements = collect($pages)->map(function ($page) use ($paginator) {
        if ($page === '...') {
            return '...';
        }

        return [$page => $paginator->url($page)];
    })->all();
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center font-sans font-semibold text-[20px] tracking-[5%] leading-7.5 text-white">
            <span class="relative z-0 inline-flex gap-x-2 h-10 rtl:flex-row-reverse">
                <span class="flex justify-center items-center">
                    {{-- Previous Page Link --}}
                    @if (!$paginator->onFirstPage())
                        <button type="button" class="cursor-pointer" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" aria-label="{{ __('pagination.previous') }}">
                            <svg width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9748 22.5868C11.8117 22.5868 11.6485 22.5249 11.5192 22.4012L5.73104 16.613C5.67083 16.5534 5.62304 16.4824 5.59042 16.4042C5.55781 16.326 5.54102 16.2421 5.54102 16.1574C5.54102 16.0727 5.55781 15.9888 5.59042 15.9106C5.62304 15.8324 5.67083 15.7614 5.73104 15.7018L11.5192 9.91365C11.5788 9.85345 11.6498 9.80566 11.728 9.77304C11.8062 9.74043 11.8901 9.72363 11.9748 9.72363C12.0595 9.72363 12.1434 9.74043 12.2216 9.77304C12.2998 9.80566 12.3708 9.85345 12.4304 9.91365C12.6835 10.1668 12.6835 10.5718 12.4304 10.8249L7.09791 16.1574L12.4304 21.4899C12.521 21.5796 12.5828 21.6943 12.6079 21.8192C12.633 21.9442 12.6203 22.0738 12.5714 22.1915C12.5225 22.3092 12.4396 22.4097 12.3334 22.4801C12.2271 22.5505 12.1023 22.5877 11.9748 22.5868Z" fill="white"/>
                            </svg>
                        </button>
                    @endif
                </span>

                <span class="flex gap-x-3">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true" class="flex justify-center items-center w-6">
                                <span class="w-full text-center text-white cursor-default select-none">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <div wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}" class="flex justify-center items-center w-6">
                                    @if ($page == $paginator->currentPage())
                                        <div aria-current="page" class="relative w-full text-center after:absolute after:left-0 after:-bottom-2 after:bg-mint-300 after:w-full after:h-1">
                                            {{ $page }}
                                        </div>
                                    @else
                                        <button type="button" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="cursor-pointer w-full text-center" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </button>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </span>

                <span class="flex justify-center items-center">
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <button type="button" class="cursor-pointer" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" aria-label="{{ __('pagination.next') }}">
                            <svg width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.18666 22.5868C6.02354 22.5868 5.86041 22.5249 5.73104 22.4011C5.67083 22.3415 5.62304 22.2706 5.59042 22.1924C5.55781 22.1141 5.54102 22.0303 5.54102 21.9455C5.54102 21.8608 5.55781 21.7769 5.59042 21.6987C5.62304 21.6205 5.67083 21.5495 5.73104 21.4899L11.0635 16.1574L5.73104 10.8305C5.67083 10.7709 5.62304 10.6999 5.59042 10.6217C5.55781 10.5435 5.54102 10.4596 5.54102 10.3749C5.54102 10.2902 5.55781 10.2063 5.59042 10.1281C5.62304 10.0499 5.67083 9.97889 5.73104 9.91927C5.79066 9.85906 5.86163 9.81127 5.93983 9.77866C6.01804 9.74604 6.10193 9.72925 6.18666 9.72925C6.2714 9.72925 6.35529 9.74604 6.43349 9.77866C6.5117 9.81127 6.58266 9.85906 6.64229 9.91927L12.4304 15.7074C12.6835 15.9605 12.6835 16.3655 12.4304 16.6186L6.64229 22.4068C6.51854 22.5305 6.34979 22.5924 6.18666 22.5924V22.5868Z" fill="white"/>
                            </svg>
                        </button>
                    @endif
                </span>
            </span>
        </nav>
    @endif
</div>
