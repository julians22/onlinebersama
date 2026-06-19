<style id="namestudio-styles" data-ns-revision="2026-06-13">
@position-try --results-close-position {
    left: unset;
    right: anchor(inside);
    top: calc(anchor(top) - var(--results-close-top-offset, 2.25rem));
}

name-studio {
    --ns-color-accents: #1275cc;
    --ns-color-accents-alt: #f4f4f4;
    --ns-color-availability: #447e10;
    --ns-color-base-alt: #f6f6f6;
    --ns-color-base-alt2: #ebebeb;
    --ns-color-btn-flyout-displayed: var(--ns-color-accents);
    --ns-color-borders: #e5e5e5;
    --ns-color-com: #dffd06;
    --ns-color-com-hover: #c1dc04;
    --ns-color-loading: #b3b3c34d;
    --ns-color-search-border: #304d6d;
    --ns-color-search-error-bg: var(--ns-color-base-alt);
    --ns-color-search-error-border: var(--ns-color-borders);
    --ns-color-search-placeholder: #657d86;
    --ns-color-search-submit-text: var(--ns-color-search-border);
    --ns-color-search-terms: var(--ns-color-base);
    --ns-color-text: #1a2e47;
    --ns-color-text-alt: #676767;
    --ns-color-text-alt2: #767676;
    --ns-color-microphone: #24272b;
    --ns-color-result-bg: #f2f2f2;
    --ns-color-btn-close: #a7127e;
    --ns-color-btn-close-hover: #920f6f;

    --ns-color-action-state: var(--ns-color-accents);

    @supports (color: oklch(0% 0 0)) {
        --ns-color-accents: oklch(0.5573 0.158 251.7);
        --ns-color-accents-alt: oklch(0.9672 0 0);
        --ns-color-availability: oklch(0.5327 0.1476 134.67);
        --ns-color-base-alt: oklch(0.9731 0 0);
        --ns-color-base-alt2: oklch(0.9401 0 0);
        --ns-color-borders: oklch(0.9219 0 0);
        --ns-color-com: oklch(0.9394 0.2182 118.11);
        --ns-color-com-hover: oklch(0.8448 0.1967 118.31);
        --ns-color-loading: oklch(0.7718 0.0226 285.86 / 30.2%);
        --ns-color-search-placeholder: oklch(0.5739 0.0311 222.65);
        --ns-color-search-border: oklch(0.4123 0.0643 251.85);
        --ns-color-text: oklch(0.2973 0.0527 254.7);
        --ns-color-text-alt: oklch(0.5138 0 0);
        --ns-color-text-alt2: oklch(0.5658 0 0);
        --ns-color-microphone: oklch(0.2713 0.0086 255.58);
        --ns-color-result-bg: oklch(0.9612 0 0);
        --ns-color-btn-close: oklch(0.4935 0.2015 343.31);
        --ns-color-btn-close-hover: oklch(0.4481 0.1829 342.75);
    }

    &[data-variant='light'] {
        --ns-color-search-terms: var(--ns-color-search-border);

        @supports (color: oklch(0% 0 0)) {
            --ns-color-search-terms: var(--ns-color-search-border);
        }
    }

    --ns-controls-max-width: min(1005px, calc(100cqw - 2rem));
    --ns-list-item-action-btn-width: 5.625rem;
    --ns-font-family: 'Urbanist';
    --ns-scroll-margin-top: 80px; /*needs to match the height of the sticky header*/

    --ns-list-items-item-default-height: 114px;
    --ns-list-items-msg-height: 2rem;

    --ns-item-status-loading-aspect-ratio: 17 / 5;
    --ns-item-status-loading-mask: url('data:image/svg+xml,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%20100%25%20100%25%27%3E%3Crect%20width%3D%27100%25%27%20height%3D%27100%25%27%20y%3D%270%27%20rx%3D%2715%27%2F%3E%3C%2Fsvg%3E');

    --ns-list-items-item-default-height: 114px;
    --ns-list-items-loading-mask: url("data:image/svg+xml,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%20100%25%20114%27%3E%3Crect%20width%3D%27100%25%27%20height%3D%2790%27%20rx%3D%2715%27%20margin%3D%270%200%2024%200%27%2F%3E%3C%2Fsvg%3E");

    font-family: var(--ns-font-family);
    opacity: 0;

    :root[lang^='id'] & {
        --ns-search-terms-before-text: 'Dengan menggunakan NameStudio®, artinya Anda menyetujui ';
        --ns-search-terms-after-text: ' Ketentuan Layanan kami dan memahami Pernyataan Privasi kami';
    }

    &:defined {
        opacity: 1;
        transition: opacity 0.3s ease-out;
    }

    /* Hide slotted items until the component is ready*/
    &:not(:defined) > [slot] {
        display: none;
    }

    .btn-results-close {
        appearance: none;
        background: #0000;
        border: none;
        color: var(--ns-color-btn-close);
        display: var(--btn-close-display, none) !important;
        pointer-events: var(--btn-close-pointer-evts, none) !important;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 500;
        gap: 0.5rem;
        line-height: 2;
        padding: 0;
        z-index: 1;

        left: calc(anchor(outside) + 1.5rem);
        top: calc(anchor(inside) + 0.5rem);
        position-try-fallbacks: --results-close-position;

        --ns-close-results-btn-position: absolute;

        svg {
            display: block;
            width: 2rem;
            height: 2rem;
        }
    }
    /*

    */
    &::part(namestudio-search) {
        --ns-line-height-search: 1.5;
    }

    &::part(namestudio-search_searchbar) {
        border-radius: 1.875rem;
        gap: 0.625rem;
        padding: 0.25rem 0.25rem 0.25rem 1rem;
        grid-template: 'search-input search-btn-utils search-btn-submit' auto / 1fr auto auto;
    }

    &::part(namestudio-search_input):placeholder-shown {
        height: 1lh;
        max-height: 1lh;
        font-style: italic;
    }

    &::part(namestudio-search_input) {
        font-weight: 400;
        padding-right: 0;
    }

    &::part(namestudio-search_input)::placeholder {
        font-style: unset;
        font-weight: 400;
    }

    &:not(&:state(namestudio-search--multiline)) {
        &::part(namestudio-search_input) {
            height: 1lh;
        }

        &::part(namestudio-search_btninfo),
        &::part(namestudio-search_btnerror) {
            grid-area: search-btn-utils;
        }
    }

    &:state(namestudio-search--multiline) {
        &::part(namestudio-search_searchbar) {
            gap: 0.625rem;
            grid-template:
                "search-input search-input search-input"
                "search-error search-btn-utils search-btn-submit" auto / 1fr auto auto;
            padding: 1.25rem 0.625rem 0.625rem;
        }
    }

    &::part(namestudio-search_searchbar),
    &::part(namestudio-search_input),
    &::part(namestudio-search_wrapper),
    &::part(namestudio-search_wrapper)::after {
        transition: none;
    }

    &::part(namestudio-search_btnsubmit) {
        background-color: var(--ns-color-com);
        color: var(--ns-color-search-submit-text);
        font-size: var(--ns-font-size-normal);
        font-weight: 700;
        letter-spacing: 0.01563rem;
        padding-inline: 1.25rem;
    }

    &::part(namestudio-search_btnreset),
    &::part(namestudio-search_btnspeech) {
        color: var(--ns-color-microphone);
        overflow: hidden;
        min-width: 2.5625rem;
        min-height: 2.5625rem;
        max-width: 2.5625rem;
        max-height: 2.5625rem;
        transition: all ease-out 0.3s;
    }

    &::part(namestudio-search_btnreset) {
        color: var(--ns-color-text-alt);
        background: transparent url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 43" fill="none"><circle cx="21" cy="21.5" r="21" fill="none"/><path d="M16 16.5L26 26.5" stroke="%23026F97" stroke-width="1.5" stroke-linecap="round"/><path d="M26 16.5L16 26.5" stroke="%23026F97" stroke-width="1.5" stroke-linecap="round"/></svg>');
        background-size: cover;
    }

    &::part(namestudio-search_btnspeech) {
        padding-inline: 0.375rem;
        padding-block: 0.296875rem;
    }

    &::part(namestudio-search_btnerror) {
        color: var(--ns-color-text-alt2);
    }

    &::part(namestudio-search_errorflyout) {
        left: 3rem;
        top: calc(var(--ns-icon-height) + 0.5rem);
        transform: translateX(-100%);
    }

    &::part(namestudio-search_errorflyoutcontainer) {
        --c1: var(--ns-color-search-error-border);
        --c2: var(--ns-color-search-error-bg);
        --p: calc(100% - 3rem + 0.75rem );

        border-radius: min(var(--r),var(--p) - var(--h)*tan(var(--a)/2)) min(var(--r),100% - var(--p) - var(--h)*tan(var(--a)/2)) var(--r) var(--r)/var(--r);
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,
            min(100%,var(--p) + var(--h)*tan(var(--a)/2)) 0,
            var(--p) calc(-1*var(--h)),
            max(0%  ,var(--p) - var(--h)*tan(var(--a)/2)) 0);
        border-image: conic-gradient(var(--c1) 0 0) fill 0/
            0 max(0%,100% - var(--p) - var(--h)*tan(var(--a)/2)) var(--r) max(0%,var(--p) - var(--h)*tan(var(--a)/2))/var(--h) 0 0 0;
    }

    &::part(namestudio-search_errorflyoutcontainer)::before {
        border-radius: inherit;
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,
            min(100% - var(--b),var(--p) + var(--h)*tan(var(--a)/2) - var(--b)*tan(45deg - var(--a)/4)) var(--b),
            var(--p) calc(var(--b)/sin(var(--a)/2) - var(--h)),
            max(       var(--b),var(--p) - var(--h)*tan(var(--a)/2) + var(--b)*tan(45deg - var(--a)/4)) var(--b));

        border-image: conic-gradient(var(--c2) 0 0) fill 0/
            0 max(var(--b),100% - var(--p) - var(--h)*tan(var(--a)/2)) var(--r) max(var(--b),var(--p) - var(--h)*tan(var(--a)/2))/var(--h) 0 0 0;
    }

    &::part(namestudio-search_termscontainer) {
        grid-column: 2 / span 2;
        letter-spacing: 0.01563rem;
        line-height: 1.42857;
        text-align: center;
        text-wrap: pretty;
        color: var(--ns-color-search-termscontainer, var(--ns-color-search-terms));
        font-weight: 500;
    }

    &::part(namestudio-search_btnterms) {
        color: var(--ns-color-search-terms);
        font-weight: var(--ns-search-terms-button-weight,500);
        text-decoration-line: underline;
        text-decoration-style: solid;
        text-decoration-skip-ink: none;
        text-decoration-thickness: auto;
        text-underline-offset: auto;
        text-underline-position: from-font;
    }

    &::part(namestudio-search_termscontainer):before {
        content: var(--ns-search-terms-before-text);
    }

    &::part(namestudio-search_termscontainer):after {
        content: var(--ns-search-terms-after-text);
    }

    &::part(namestudio-result) {
        --ns-controls-max-width: min(68rem, calc(100cqw - 2rem));
        padding: 2.5rem 1rem 2.5rem;
        background-color: var(--ns-color-result-bg,#0000);
    }

    &::part(namestudio-list-item--status-available) {
        margin-bottom: 2rem;
        max-height: 30rem;
    }

    &::part(namestudio-list-item--status-available_wrapper) {
        background-color: var(--ns-color-base);
        border-radius: 0.9375rem;
        border-width: 0.125rem;
    }

    &::part(namestudio-list-item--status-available_wrapperheading) {
        font-size: 1.375rem;
        line-height: 1.36363;
        letter-spacing: 0.01563rem;
    }

    &::part(namestudio-list-item--status-available_heading) {
        --ns-icon-width: 2.25rem;
        --ns-icon-height: 2.25rem;
        font-size: 2.5rem;
        line-height: 1;
        font-weight: 600;
        margin: 2.25rem 1rem;
    }

    &::part(namestudio-list-item--status-available_actions) {
        --ns-icon-width: 1.625rem;
        border-width: 0.125rem;
    }

    &::part(namestudio-list-item--status-available_btncopy),
    &::part(namestudio-list-item--status-available_btnhowto),
    &::part(namestudio-list-item--status-available_btnfavorite) {
        --ns-icon-fill-color: var(--ns-color-accents);
        background-color: var(--color-base-alt);
        border-width: 0.125rem;
        color: var(--ns-color-text);
        font-size: 1.125rem;
        line-height: 1.22222;
        font-weight: 500;
        height: unset;
        padding-block: 2.25rem
    }

    &::part(namestudio-list-item_btnhowto) {
        --ns-icon-fill-color: var(--ns-color-accents);
    }

    &::part(namestudio-list-item--result-available) {
        border-radius: 0.9375rem;
        border-width: 0.125rem;
        font-size: 1.25rem;
        font-weight: 600;
        letter-spacing: 0.01563rem;
        line-height: 1.5;
        min-height: 5.625rem;
    }

    &::part(namestudio-list-item--result-available_actions) {
        --ns-icon-width: 1.625rem;
    }

    &::part(namestudio-list-item--result-available_btncopy),
    &::part(namestudio-list-item--result-available_btnfavorite) {
        --ns-list-item-action-btn-width: 5.625rem;
        border-left-width: 0.125rem;
    }

    &::part(namestudio-list-items) {
        gap: 1.5rem;
    }

    &::part(namestudio-list-items)::before {
        color: var(--ns-color-text);
        font-size: 1.375rem;
        font-weight: 700;
        line-height: 1.18181;
        padding-bottom: 0.5rem;
    }

    &::part(namestudio-favorites) {
        max-height: 3rem;
        --ns-color-accents: var(--ns-color-search-border);
    }

    &::part(namestudio-favorites-empty) {
        max-height: 0;
    }

    &::part(namestudio-favorites_toggle) {
        color: var(--ns-color-search-border);
        font-size: var(--ns-font-size-normal);
        font-weight: 700;
        letter-spacing: 0.01563rem;
        --ns-color-icon-favorite-fill: currentColor;
        --ns-color-icon-favorite-stroke: currentColor;
    }


    @container ns-host (width <= 48rem) {
        &::part(namestudio-controls) {
            max-width: 100cqw;
            padding-inline: 1.5rem;
        }
    }

    @container ns-host (width <= 37.5rem) {
        .btn-results-close {
            --results-close-top-offset: 3.6875rem;
        }

        &::part(namestudio-search_wrapper):after,
        &::part(namestudio-search_input) {
            min-height: unset;
        }

        &::part(namestudio-search_input)::placeholder {
            line-height: 1.5rem;
        }

        &::part(namestudio-search_searchbar) {
            padding-left: 0.625rem;
        }

        &::part(namestudio-search_btnsubmit) {
            gap: 0;
            padding: 0;
            max-height: 2.5625rem;
            max-width: 2.5625rem;
            min-height: 2.5625rem;
            min-width: 2.5625rem;
            padding-left: 0.1875px;
            padding-top: 0.125rem;
        }

        &::part(namestudio-search_btnsubmit)::after {
            display: none;
        }

        &::part(namestudio-result) {
            padding-top: 6.25rem;
            --ns-item-status-loading-aspect-ratio: 380 / 300 !important;
        }

        &::part(namestudio-list-items) {
            gap: 1rem;
         }

        &::part(namestudio-list-items)::before {
            font-size: 1.25rem;
            line-height: 1.0909;
            text-align: center;
        }

         &::part(namestudio-list-item--status-available_wrapperheading),
         &::part(namestudio-list-item--result-available) {
            font-size: 1.25rem;
            line-height: 1.5;
            --ns-font-size-small: 1.25rem;
         }

         &::part(namestudio-list-item--status-available_heading) {
            --ns-icon-width: 2.25rem;
            --ns-icon-height: 2.25rem;
            font-size: 1.75rem;
         }

        &::part(namestudio-list-item--status-available_btncopy),
        &::part(namestudio-list-item--status-available_btnhowto),
        &::part(namestudio-list-item--status-available_btnfavorite) {
            font-size: 0.9375rem;
            line-height: 1.2;
            padding: 1.25rem 1rem
        }

        &::part(namestudio-list-item--result-available_btncopy),
        &::part(namestudio-list-item--result-available_btnfavorite) {
            --ns-list-item-action-btn-width: 3.625rem;
            border-left-width: 0;
        }
    }

    @container ns-host (width <= 25.875rem) {
        &::part(namestudio-list-item--status-available_wrapperheading),
        &::part(namestudio-list-item--result-available) {
            --ns-font-size-small: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.5;
        }

        &::part(namestudio-list-item--status-available_btncopy),
        &::part(namestudio-list-item--status-available_btnhowto),
        &::part(namestudio-list-item--status-available_btnfavorite) {
            padding: 1.25rem 0.5rem;
        }

        &::part(namestudio-search_input)::placeholder {
            font-size: clamp(0.625rem, -1.043rem + 8.182cqw, var(--ns-font-size-small));
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    }

    @media (hover: hover) and (pointer: fine) {
        .btn-results-close:is(:hover, :active) {
            color: var(--ns-color-btn-close-hover);
        }

        &::part(namestudio-search_btnsubmit):is(:hover, :active) {
            background-color: var(--ns-color-com-hover);
        }

        &::part(namestudio-search_btnterms):is(:hover, :active) {
            color: var(--ns-color-search-terms-hover, var(--ns-color-search-terms));
        }

        &::part(namestudio-search_btnreset):is(:hover, :active),
        &::part(namestudio-search_btnspeech):is(:hover, :active) {
            background-color: var(--ns-color-base-alt);
            transition: all ease-out 0.3s;
        }
    }
}

@media (width <= 768px) {
    name-studio {
        --ns-scroll-margin-top: 44px;
    }
}

name-studio[results] {
    @container ns-host (width <= 48rem) {
        &::part(namestudio-controls) {
            padding-top: 1.5rem;
        }
    }
}
</style>


<div class="namestudio-container relative w-full mt-6">

    @if (config('onlinebersama.namestudio_overlay_enabled'))
        <livewire:name-studio-overlay>
    @endif

    <name-studio api-key="{{ config('onlinebersama.namestudio_api_key') }}" engine-ai-mode="always" entry-mode="prompt" tlds="com" data-ns-revision="2026-05-11">
    <script type="application/json" data-type="name-studio">{"i18n":{"id":{"namestudio-search":{"prompt":{"placeholder":"Masukkan Kata, Frasa, atau Nama Bisnis","btnreset":"","btngenerate":"Cari","btngenerateloading":"Cari","btngenerateregenerate":"Cari"}}}},"legal":{"terms":"https://onlinebersama.com/staging/persyaratan-layanan"}}</script>
        <button slot="btn-results-close" class="btn-results-close">
            <span>Tutup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"><g clip-path="url(#nsclose)"><path d="m16 17.775 5.176 5.176q.35.35.88.358.528.008.895-.358.366-.367.366-.888a1.2 1.2 0 0 0-.366-.887L17.775 16l5.176-5.176q.35-.35.358-.88a1.2 1.2 0 0 0-.358-.895 1.2 1.2 0 0 0-.888-.366 1.2 1.2 0 0 0-.887.366L16 14.225 10.824 9.05a1.22 1.22 0 0 0-.88-.358 1.2 1.2 0 0 0-.895.358 1.2 1.2 0 0 0-.366.888q0 .52.366.887L14.225 16 9.05 21.176a1.22 1.22 0 0 0-.358.88q-.008.528.358.895.366.366.888.366.52 0 .887-.366zM16.003 32q-3.32 0-6.24-1.26T4.68 27.32t-3.42-5.078T0 16.002q0-3.318 1.26-6.24 1.26-2.92 3.42-5.08Q6.838 2.52 9.757 1.26 12.678 0 15.998 0q3.318 0 6.24 1.26 2.92 1.26 5.08 3.42 2.161 2.159 3.422 5.078 1.26 2.92 1.26 6.24 0 3.318-1.26 6.24-1.26 2.92-3.42 5.08-2.159 2.161-5.078 3.422-2.92 1.26-6.24 1.26M16 29.474q5.642 0 9.558-3.916T29.474 16t-3.916-9.558T16 2.526 6.442 6.442 2.526 16t3.916 9.558T16 29.474"></path></g><defs><clipPath id="nsclose"><path fill="#fff" d="M0 0h32v32H0z"></path></clipPath></defs></svg>
        </button>
    </name-studio>

    {{-- <name-studio api-key="{{ config('onlinebersama.namestudio_api_key') }}" engine-ai-mode="always" entry-mode="prompt" tlds="com"
        data-ns-revision="2026-05-11">
        <script type="application/json" data-type="name-studio">
            {"i18n":{"id":{"namestudio-search":{"prompt":{"placeholder":"Masukkan Kata, Frasa, atau Nama Bisnis","btnreset":"","btngenerate":"Cari","btngenerateloading":"Cari","btngenerateregenerate":"Cari"}}}},"legal":{"terms":"https://onlinebersama.com/staging/persyaratan-layanan"}}
        </script>
        <button slot="btn-results-close" class="btn-results-close">
            <span>Tutup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32">
                <g clip-path="url(#nsclose)">
                    <path
                        d="m16 17.775 5.176 5.176q.35.35.88.358.528.008.895-.358.366-.367.366-.888a1.2 1.2 0 0 0-.366-.887L17.775 16l5.176-5.176q.35-.35.358-.88a1.2 1.2 0 0 0-.358-.895 1.2 1.2 0 0 0-.888-.366 1.2 1.2 0 0 0-.887.366L16 14.225 10.824 9.05a1.22 1.22 0 0 0-.88-.358 1.2 1.2 0 0 0-.895.358 1.2 1.2 0 0 0-.366.888q0 .52.366.887L14.225 16 9.05 21.176a1.22 1.22 0 0 0-.358.88q-.008.528.358.895.366.366.888.366.52 0 .887-.366zM16.003 32q-3.32 0-6.24-1.26T4.68 27.32t-3.42-5.078T0 16.002q0-3.318 1.26-6.24 1.26-2.92 3.42-5.08Q6.838 2.52 9.757 1.26 12.678 0 15.998 0q3.318 0 6.24 1.26 2.92 1.26 5.08 3.42 2.161 2.159 3.422 5.078 1.26 2.92 1.26 6.24 0 3.318-1.26 6.24-1.26 2.92-3.42 5.08-2.159 2.161-5.078 3.422-2.92 1.26-6.24 1.26M16 29.474q5.642 0 9.558-3.916T29.474 16t-3.916-9.558T16 2.526 6.442 6.442 2.526 16t3.916 9.558T16 29.474">
                    </path>
                </g>
                <defs>
                    <clipPath id="nsclose">
                        <path fill="#fff" d="M0 0h32v32H0z"></path>
                    </clipPath>
                </defs>
            </svg>
        </button>
    </name-studio> --}}
</div>
