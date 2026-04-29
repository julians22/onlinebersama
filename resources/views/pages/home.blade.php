@extends('app')

@section('title', 'Homepage')

@section('content')

<main>
    <section class="relative">
        <img class="aspect-48/17 w-full object-cover h-170" src="{{ asset('images/homepage-hero.jpg') }}" alt="Home Hero">
        <div class="absolute container top-0 left-1/2 -translate-x-1/2 flex items-end size-full py-19.5">
            <div class="space-y-12 text-white">
                <h1 class="headline-1">Where the World <span class="block text-[132px] mt-2.5">Finds You</span></h1>
                <p class="paragraph-md">A .com helps people find you and trust you.</p>
            </div>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="container flex flex-col items-center justify-center gap-2.5 py-22">
            <h2 class="subheadline-2 text-white">Discover .com Domain Names</h2>
            <img src="{{ asset('images/ns-search.png') }}">
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container py-10">
            <h2 class="headline-1 text-navy-blue-300 text-center mb-11.25">How Do I Use a .com?</h2>
            <div x-data="{ active: 'social' }" class="flex gap-8">
                <div @mouseenter="active = 'email'" :class="active === 'email' ? 'basis-2/4!' : 'basis-1/4!'" class="transition-all duration-500 ease-in-out basis-1/4 relative box-shadow-md rounded-[10px] overflow-hidden">
                    <img class="aspect-208/223 object-cover w-full h-111.5" src="{{ asset('images/brand-1.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-6">
                        <div class="text-white">
                            <p class="paragraph-md leading-8.5! md:text-[18px]!">.com for</p>
                            <h3 class="subheadline-3 md:text-[26px]!">Email</h3>
                        </div>
                        <div :class="active === 'email' ? 'translate-y-0! opacity-100!' : 'translate-y-20! opacity-0!'" class="transition-all duration-500 ease-in-out opacity-0 translate-y-20">
                            <a href="{{ route('email') }}" class="btn-primary font-bold max-w-55.75 text-lg py-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div @mouseenter="active = 'social'" :class="active === 'social' ? 'basis-2/4!' : 'basis-1/4!'" class="transition-all duration-500 ease-in-out basis-2/4 relative box-shadow-md rounded-[10px] overflow-hidden">
                    <img class="aspect-208/223 object-cover w-full h-111.5" src="{{ asset('images/brand-2.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-6">
                        <div class="text-white">
                            <p class="paragraph-md leading-8.5! md:text-[18px]!">.com for</p>
                            <h3 class="subheadline-3 md:text-[26px]!">Social Media <span class="block">& E-Commerce</span></h3>
                        </div>
                        <div :class="active === 'social' ? 'translate-y-0! opacity-100!' : 'translate-y-20! opacity-0!'" class="transition-all duration-500 ease-in-out">
                            <a href="{{ route('social-media') }}" class="btn-primary font-bold max-w-55.75 text-lg py-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div @mouseenter="active = 'websites'" :class="active === 'websites' ? 'basis-2/4!' : 'basis-1/4!'" class="transition-all duration-500 ease-in-out basis-1/4 relative box-shadow-md rounded-[10px] overflow-hidden">
                    <img class="aspect-208/223 object-cover w-full h-111.5" src="{{ asset('images/brand-3.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col justify-between size-full p-6">
                        <div class="text-white">
                            <p class="paragraph-md leading-8.5! md:text-[18px]!">.com for</p>
                            <h3 class="subheadline-3 md:text-[26px]!">Websites</h3>
                        </div>
                        <div :class="active === 'websites' ? 'translate-y-0! opacity-100!' : 'translate-y-20! opacity-0!'" class="transition-all duration-500 ease-in-out opacity-0 translate-y-20">
                            <a href="{{ route('websites') }}" class="btn-primary font-bold max-w-55.75 text-lg py-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <img class="mx-auto" src="{{ asset('images/placeholder-video-how.jpg') }}" alt="">
            <button type="button" class="absolute z-10 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                <img class="size-32.5" src="{{ asset('icons/navy-play.svg') }}" alt="">
            </button>
            <div class="absolute container top-0 left-1/2 -translate-x-1/2 flex items-center size-full">
                <div class="space-y-3.5">
                    <h2 class="headline-1 text-navy-blue-300">Not Just a Domain. <span class="block">A Declaration.</span></h2>
                    <p class="paragraph-md text-deep-blue-300">Make your mark and build a trusted brand with .com.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-blue-single pt-11.5 pb-19.5">
        <div class="container">
            <div class="max-w-250 mx-auto flex flex-col gap-8">
                <div class="space-y-2 text-white text-center">
                    <h2 class="headline-1">Why .com?</h2>
                    <p class="paragraph-md">A .com domain name scales across platforms, places, and possibilities.</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="space-y-3 bg-navy-blue-500 rounded-[10px] p-6">
                            <h3 class="subheadline-3 text-vibrant-yellow-300">Universal</h3>
                            <p class="paragraph-md text-white leading-7.5!">A .com domain name is understood by everyone, everywhere.</p>
                        </div>
                        <div class="space-y-3 bg-navy-blue-500 rounded-[10px] p-6">
                            <h3 class="subheadline-3 text-vibrant-yellow-300">Trusted</h3>
                            <p class="paragraph-md text-white leading-7.5!">A domain that is trusted by global companies and local merchants.</p>
                        </div>
                        <div class="space-y-3 bg-navy-blue-500 rounded-[10px] p-6">
                            <h3 class="subheadline-3 text-vibrant-yellow-300">Recognized</h3>
                            <p class="paragraph-md text-white leading-7.5!">.com is recognized by businesses and consumers worldwide.</p>
                        </div>
                    </div>
                    <div class="relative rounded-[10px] overflow-hidden">
                        <img class="w-full" src="{{ asset('images/placeholder-video-why-com.jpg') }}" alt="">
                        <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                            <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                        </button>
                        <div class="absolute bottom-0 left-0 p-8">
                            <div class="space-y-4 text-white">
                                <h4 class="subheadline-3 font-extrabold!">IKAT Indonesia</h4>
                                <p class="paragraph-sm">Dengarkan bagaimana nama domain .com yang dikenal membantu pemilik bisnis mengembangkan bisnisnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="btn-primary font-bold py-3 px-4">View Small Business Stories</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Make Your Mark Online</h2>
            <div class="max-w-208 mx-auto flex flex-col gap-6">
                <div class="sticky top-32">
                    <x-displays.card-stack number="1" title="Be Easier To Find" image="images/homepage-editorial-1.jpg" alt="Be Easier To Find">
                        A .com domain name helps customers to more easily find a business online.
                    </x-displays.card-stack>
                </div>
                <div class="sticky top-52">
                    <x-displays.card-stack number="2" title="Stand Out Online" image="images/homepage-editorial-2.jpg" alt="Stand Out Online">
                        .com can help boost a business’s visibility.
                    </x-displays.card-stack>
                </div>
                <div class="sticky top-32">
                    <x-displays.card-stack number="3" title="Enhance Your Credibility" image="images/homepage-editorial-3.jpg" alt="Enhance Your Credibility">
                        .com can help a small business look more legitimate.
                    </x-displays.card-stack>
                </div>
            </div>
        </div>
    </section>
    <section class="container flex flex-col gap-10 py-20">
        <h2 class="headline-1 text-center text-navy-blue-300">Frequently Asked Questions</h2>
        <div class="flex flex-col">
            <x-displays.accordion question="Why should I choose a .com?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="What is a domain name?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="Does my domain name need to be my business name?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="When I buy a domain name, is it mine forever?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="How do I get a .com domain name?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="What are the different ways I can use a domain name?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="Why do I need a .com domain name if I already have a social media account?">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
            <x-displays.accordion question="What are the benefits of having a .com domain name if I already have a ccTLD?" :last="true">
                A domain name is a unique, customized online address (e.g., example.com) that can either be used to send people directly to an online presence (like a website or social media page), or used as a custom email address.
            </x-displays.accordion>
        </div>
        <div class="flex justify-center">
            <a href="#" class="btn-secondary font-bold max-w-60 w-full">Discover More</a>
        </div>
    </section>
</main>

@endsection
