@extends('app')

@section('title', 'Use Case - Websites')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com For Websites</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5! max-w-125">A website with a .com domain name is a foundation your customers can rely on to find and engage online as your business grows.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-websites.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Benefits of Website</h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="sticky top-32">
                <x-displays.card-stack number="1" title="Grow on Your Terms" image="images/website-editorial-1.jpg" alt="">
                    Give your business that polished, professional look. Get a custom .com email address and show everyone you’re a pro.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-54">
                <x-displays.card-stack number="2" title="Control Your Brand" image="images/website-editorial-2.jpg" alt="">
                    Having a website with a .com domain name gives you room to build your brand and control your online presence.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-32">
                <x-displays.card-stack number="3" title="Be Easier To Find" image="images/website-editorial-3.jpg" alt="">
                    A website with a .com domain name makes you easier to find. It’s where the world discovers you.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3!">Discover More Benefits</a>
        </div>
    </section>
    <section class="bg-gradient-blue-double">
        <div class="container flex flex-col justify-center items-center gap-10 py-19.5">
            <div class="space-y-10 text-white">
                <h2 class="headline-2">Website Planning Checklist</h2>
                <p class="paragraph-lg">Build your online home with a .com website.</p>
            </div>
            <div class="grid grid-cols-3 gap-8">

                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Create a Plan to Build Your Website</h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Choose and register a .com domain name for your web address.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Decide the purpose of your website (e.g., blog, e-commerce site, online brochure).</p>
                    </div>
                </div>

                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Defining Website Requirements</h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Determine what is most important to have on your website today, and what can be added later.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Figure out what information your visitors will find interesting and valuable (e.g., contact info, product descriptions).</p>
                    </div>
                </div>

                <div class="grid grid-rows-subgrid row-span-3 gap-4 bg-white rounded-[10px] p-4">
                    <div class="flex flex-col justify-center items-center text-center gap-2.5 rounded-lg bg-mint-300 text-deep-blue-300 p-6">
                        <img class="size-10" src="{{ asset('icons/deep-list.svg') }}" alt="">
                        <h3 class="subheadline-3">Manage Your <span class="block">Website</span></h3>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300 border-b-4 border-mint-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Choose and register a .com domain name for your web address.</p>
                    </div>
                    <div class="flex gap-4 py-2 text-deep-blue-300">
                        <img class="size-12.5" src="{{ asset('icons/mint-check.svg') }}" alt="">
                        <p class="paragraph-sm">Decide the purpose of your website (e.g., blog, e-commerce site, online brochure).</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">How to Build a <span class="block">Professional Website</span></h2>
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
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Log in and go to Manage Domain Names or click on the Domain Name tab.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">3</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Select the Domain Name</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Select the domain name you wish to forward, look for the Domain Forwarding option, and click Add New.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">4</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Paste the Destination URL</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Paste your social media or e-commerce page URL into the Forward or Redirect Domain section.</p>
                </div>
            </div>
            <div class="flex gap-3.25 px-4">
                <div class="shrink-0 flex justify-center items-center size-12.5 rounded-full border-4 border-mint-300 font-semibold text-navy-blue-300 text-[32px]">5</div>
                <div class="space-y-2 text-deep-blue-300">
                    <h3 class="subheadline-3">Update DNS & Save</h3>
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Make sure you update your DNS settings to support this change, then hit Save, and you’re done!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray-100">
        <div class="container flex flex-col gap-10 pt-10 pb-19.5">
            <h2 class="headline-1 text-navy-blue-300 text-center">How Do I Use a .com?</h2>
            <div class="grid grid-cols-2 gap-8">
                <x-displays.card-inside route="social-media" image="images/brand-2.jpg">Social Media & <span class="block">E-Commerce</span></x-displays.card-inside>
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
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
