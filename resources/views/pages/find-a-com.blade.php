@extends('app')

@section('title', 'Find a .com')

@section('content')

<main>
    <section class="bg-deep-blue-300">
        <div class="container flex flex-col items-center text-center gap-2.5 text-white py-40">
            <h1 class="headline-1">Discover .com Domain Names</h1>
            <p class="paragraph-md max-w-170 leading-8.5!">A .com helps customers find you and trust you. Find great .com domain names by using our domain name generator.</p>
            <div class="shrink-0">
                <img src="{{ asset('images/ns-search.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="container flex justify-center items-center gap-12 py-20">
        <div class="relative rounded-[10px] overflow-hidden">
            <img class="w-150" src="{{ asset('images/placeholder-video-find.jpg') }}" alt="">
            <button type="button" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
            </button>
        </div>
        <h2 class="headline-2 text-navy-blue-300 max-w-125">Three Tips to Choose a .com Domain Name</h2>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">How Do I Use a .com?</h2>
            <div class="grid grid-cols-3 gap-8">
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Social Media & <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Websites</x-displays.card-inside>
            </div>
        </div>
    </section>
</main>

@endsection
