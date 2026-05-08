@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center font-sans font-semibold text-[22px] tracking-[5%] leading-7.5 text-white">
            <span class="relative z-0 inline-flex gap-x-2 h-10 rtl:flex-row-reverse">
                <span class="flex justify-center items-center">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="" aria-hidden="true">
                                <img src="{{ asset('images/icons/white-chevron-left.svg') }}">
                            </span>
                        </span>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="" aria-label="{{ __('pagination.previous') }}">
                            <img src="{{ asset('images/icons/white-chevron-left.svg') }}">
                        </button>
                    @endif
                </span>

                <span class="flex gap-x-3">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
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
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="" aria-label="{{ __('pagination.next') }}">
                            <img src="{{ asset('images/icons/white-chevron-right.svg') }}">
                        </button>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="" aria-hidden="true">
                                <img src="{{ asset('images/icons/white-chevron-right.svg') }}">
                            </span>
                        </span>
                    @endif
                </span>
            </span>
        </nav>
    @endif
</div>
