@extends('app')

@section('title', $post->meta_title ?? $post->title)

@section('meta_title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->title)
@section('meta_keywords', $post->meta_keywords ?? $post->title)

@section('content')

<main data-analytics-level1="body">
    @if ($post->isCustomTemplate())
        <x-displays.scroll-progress />
        <section
            data-analytics-level2="hero"
            class="bg-light-gray-100">
            <div class="container grid grid-cols-1 items-center gap-6 py-10 md:gap-10 md:py-19.5 xl:grid-flow-col">
                <div class="flex flex-col gap-4 md:gap-6">
                    <div
                        data-analytics-name="text | breadcrumb"
                        class="flex items-center gap-1 font-sans text-deep-blue-300 text-sm font-semibold">
                        <div class="mb-0.5">
                            <x-icons.home width="13" height="13" fill="#1A2E47" />
                        </div>
                        <span class="font-medium text-[10px]">/</span>
                        <a href="{{ route('resources.index') }}">Panduan Belajar</a>
                    </div>
                    <h1 class="headline-1 text-navy-blue-300">{{ $post->title }}</h1>
                    @if ($post->writer)
                        <h4 class="subheadline-4 text-deep-blue-300 font-extrabold!">Oleh {{ $post->writer }}</h4>
                    @endif
                    <p class="paragraph-sm text-deep-blue-300">Waktu baca rata-rata {{ $post->read_time }}</p>
                </div>
                <div @if ($post->writer) data-analytics-level3="{{ $post->data_analytics ?? $post->title }}" @endif class="relative aspect-video w-full rounded-[10px] overflow-hidden xl:w-156.75">
                    <img @if ($post->writer) data-analytics-name="video image | {{ $post->data_analytics ?? $post->title }}" @endif class="w-full" src="{{ imageArticle($post->slug) }}" alt="">
                    @if ($post->writer)
                        <button data-analytics-name="play button | {{ $post->data_analytics ?? $post->title }}" type="button" class="group absolute size-full inset-0 flex justify-center items-center bg-gradient-video cursor-pointer">
                            <x-icons.play-rounded width="78" height="78" fill="#fff" class="transition-all duration-300 ease-in-out group-hover:scale-110" />
                        </button>
                    @endif
                </div>
            </div>
        </section>
        @include($view_path)
        <section
            data-analytics-level2="search"
            class="bg-deep-blue-300 py-16 lg:py-22">
            <div class="container flex flex-col justify-center items-center">
                <h2 class="subheadline-2 text-white text-center max-w-xs mx-auto sm:mx-0 sm:max-w-full lg:text-[40px]!">
                    Temukan Nama Domain .com
                </h2>
            </div>
            <x-displays.namestudio/>
        </section>
        <section
            data-analytics-level2="How Do I Use a .com?"
            class="bg-light-gray-100 overflow-hidden!">
            <div class="container py-10 px-0 md:pt-10 md:pb-19.5 xl:px-8">
                <h2 class="text-navy-blue-300 text-center -mb-6 px-4 headline-1 md:-mb-2 md:px-8">Bagaimana Saya Menggunakan .com?</h2>
                <div class="online-bersama-how-to-use swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <x-displays.card-inside
                                data-analytics="Email"
                                route="email"
                                image="images/brand-1.jpg">
                                Email
                            </x-displays.card-inside>
                        </div>
                        <div class="swiper-slide">
                            <x-displays.card-inside
                                data-analytics="Social Media & E-Commerce"
                                route="social-media"
                                image="images/brand-2.jpg">
                                Media Sosial dan <span class="block">E-Commerce</span>
                            </x-displays.card-inside>
                        </div>
                        <div class="swiper-slide">
                            <x-displays.card-inside
                                data-analytics="Websites"
                                route="websites"
                                image="images/brand-3.jpg">
                                Situs Web
                            </x-displays.card-inside>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section
            data-analytics-level2="Explore More Topics"
            class="container overflow-hidden! py-10 md:pt-10 md:pb-19.5">
            <h2 class="text-navy-blue-300 text-center -mb-6 px-4 headline-1 md:-mb-2 md:px-8">Jelajahi Topik Lain</h2>
            <div class="online-bersama-explore-more-topics swiper">
                <div class="swiper-wrapper">
                    @forelse ($other_posts as $post)
                        <div data-analytics-level3="{{ $post->data_analytics ?? $post->title }}" class="swiper-slide">
                            <x-displays.card-resource
                                data-analytics="{{ $post->data_analytics ?? $post->title }}"
                                :image="$post->slug"
                                route="{{ route('resources.handle_second_route', $post->route_tools) }}">
                                {{ $post->title }}
                            </x-displays.card-resource>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <div>
                                <h5>No Article Found</h5>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    @else
        @include('contents.articles.default')
    @endif
</main>

@endsection
