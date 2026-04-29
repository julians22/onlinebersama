@extends('app')

@section('title', 'Use Case - Email')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com for Email</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5! max-w-125">Turn emails into a statement of credibility. With a custom .com email address, your business emails can look more professional.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-email.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Benefits of Custom Email</h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="sticky top-32">
                <x-displays.card-stack number="1" title="Build Legitimacy" image="images/email-editorial-1.jpg" alt="">
                    Give your business that polished, professional look. Get a custom .com email address and show everyone you’re a pro.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-54">
                <x-displays.card-stack number="2" title="Increase Credibility" image="images/email-editorial-2.jpg" alt="">
                    With a custom .com email address, you can make a strong, lasting impression and build trust with customers.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-32">
                <x-displays.card-stack number="3" title="Market Your Business" image="images/email-editorial-3.jpg" alt="">
                    Get a custom .com email address and build your brand with every email you send.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3!">Discover More Benefits</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="container flex justify-center items-center gap-12 py-20">
            <div class="shrink-0 relative rounded-[10px] overflow-hidden">
                <img class="aspect-video size-full object-cover" src="{{ asset('images/three-ways.jpg') }}" alt="">
                <button type="button" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
            <div class="max-w-150 space-y-6 p-6 text-white">
                <h2 class="headline-2">Three Ways To Use a Custom Email Address</h2>
                <p class="paragraph-md leading-8.5!">Ready to take your communications to the next level? Discover how you can use a custom email address to support your business in this video.</p>
            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">How To Setup a Custom Email Address</h2>
            <div class="relative rounded-[10px] overflow-hidden">
                <img class="aspect-video size-full" src="{{ asset('images/how-to-forward-domain.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-linear-360 from-black/80 to-transparent"></div>
                <button type="button" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-8 max-w-125">
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">1</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Register a Domain Name</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Start by registering a .com domain name through your preferred registrar.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">2</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Log In to Your Account</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Log in to your registrar account, look for the Settings icon, and find the Email tab.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Select Hosting Provider</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Select an email hosting provider.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Purchase an Email Plan</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Purchase and set up your business email plan, and conﬁgure your email account using your .com domain name.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Click Create</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Click create, and you’re done!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">How Do I Use a .com?</h2>
            <div class="grid grid-cols-2 gap-8">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Social Media & <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="websites" image="images/brand-3.jpg">Websites</x-displays.card-inside>
            </div>
        </div>
    </section>
    <section class="relative bg-[#F0EAE4]">
        <img class="mx-auto" src="{{ asset('images/resources-hero.jpg') }}" alt="">
        <div class="absolute container top-0 left-1/2 -translate-x-1/2 flex flex-col gap-6 justify-center size-full">
            <h2 class="headline-1 text-navy-blue-300">Looking for More <span class="block text-[128px]">Resources?</span></h2>
            <p class="paragraph-md text-deep-blue-300 max-w-150 mt-4 leading-8.5!">Browse the Learning Hub to find all our articles, videos, and more on ways to use a .com.</p>
            <a href="#" class="btn-secondary w-max font-bold py-3 px-6">Visit the Learning Hub</a>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="container flex flex-col items-center justify-center gap-2.5 py-22">
            <h2 class="subheadline-2 text-white">Discover .com Domain Names</h2>
            <img src="{{ asset('images/ns-search.png') }}">
        </div>
    </section>
</main>

@endsection
