@extends('app')

@section('title', 'Use Case - Social Media & E-Commerce')

@section('content')

<main>
    <section class="bg-light-gray-100">
        <div class="container flex items-center justify-between gap-20 py-15.5">
            <div class="space-y-4">
                <h1 class="headline-1 text-navy-blue-300">.com For Social Media and E-Commerce</h1>
                <p class="paragraph-md text-deep-blue-300 leading-8.5! max-w-125">With domain forwarding, you can link to your online store or social media page from a memorable .com domain name.</p>
            </div>
            <div class="relative shrink-0 rounded-[10px] overflow-hidden">
                <img class="aspect-video w-156 object-cover box-shadow-sm" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                <div class="absolute top-0 left-0 size-full bg-black/30"></div>
                <button type="button" class="absolute top-1/2 left-1/2 size-19.5 -translate-y-1/2 -translate-x-1/2 cursor-pointer">
                    <img class="size-19.5" src="{{ asset('icons/white-play-rounded.svg') }}" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="container py-10">
        <h2 class="headline-1 text-navy-blue-300 text-center mb-10">Benefits of <span class="block">Domain Forwarding</span></h2>
        <div class="max-w-208 mx-auto flex flex-col gap-6">
            <div class="sticky top-32">
                <x-displays.card-stack number="1" title="Memorable Way To Market" image="images/social-media-editorial-1.jpg" alt="">
                    A .com domain name is for more than just a website. With domain forwarding, you can give any online presence a memorable web address.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-54">
                <x-displays.card-stack number="2" title="A Consistent Web Address" image="images/social-media-editorial-2.jpg" alt="">
                    Get a custom .com web address that moves with your business, so even if you move your store, your customers will always be able to find you.
                </x-displays.card-stack>
            </div>
            <div class="sticky top-32">
                <x-displays.card-stack number="3" title="The Flexibility to Change" image="images/social-media-editorial-3.jpg" alt="">
                    You can update the online destination a .com domain name sends visitors to at any time.
                </x-displays.card-stack>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="btn-secondary font-bold py-3!">Discover More Benefits</a>
        </div>
    </section>
    <section class="bg-deep-blue-300">
        <div class="container pt-10 pb-19.5">
            <h2 class="headline-1 text-white text-center mb-13">Two Ways To Use Domain Forwarding</h2>
            <div x-data="{ active: 'social-media' }" class="flex justify-center gap-4">
                <div class="flex flex-col gap-4 max-w-xs">
                    <button type="button" @click="active = 'social-media'" :class="active === 'social-media' && 'bg-white! text-deep-blue-300!'" class="rounded-[10px] bg-navy-blue-300 text-white text-left cursor-pointer space-y-3 h-full p-6">
                        <h3 class="subheadline-3">Social Media</h3>
                        <p class="paragraph-md leading-8.5!">Get more eyes on your page.</p>
                    </button>
                    <button type="button" @click="active = 'online-store'" :class="active === 'online-store' && 'bg-white! text-deep-blue-300!'" class="rounded-[10px] bg-navy-blue-300 text-white text-left cursor-pointer space-y-3 h-full p-6">
                        <h3 class="subheadline-3">Online Store</h3>
                        <p class="paragraph-md leading-8.5!">Make your business easier to find.</p>
                    </button>
                </div>
                <a x-show="active === 'social-media'" href="#" class="relative rounded-[10px] overflow-hidden max-w-156">
                    <img class="aspect-video object-cover size-full" src="{{ asset('images/uc-social-media-ecommerce.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col gap-4 justify-end size-full bg-linear-360 from-black/60 to-transparent text-white p-6">
                        <p class="paragraph-md leading-8.5!">Reach more people by connecting your social media page to a custom .com web address.</p>
                        <p class="font-sans text-[20px] w-max tracking-[0.25px] font-bold underline underline-offset-[12%] decoration-[8%]">Read More</p>
                    </div>
                </a>
                <a x-show="active === 'online-store'" x-cloak href="#" class="relative rounded-[10px] overflow-hidden max-w-156">
                    <img class="aspect-video object-cover size-full" src="{{ asset('images/uc-email.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 flex flex-col gap-4 justify-end size-full bg-linear-360 from-black/60 to-transparent text-white p-6">
                        <p class="paragraph-md leading-8.5!">Sell your products online with a professional-looking website.</p>
                        <p class="font-sans text-[20px] w-max tracking-[0.25px] font-bold underline underline-offset-[12%] decoration-[8%]">Read More</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="container flex items-center gap-44 py-19.5">
        <div class="flex flex-col gap-11.5">
            <h2 class="headline-2 text-navy-blue-300 text-center">How To Forward Your <span class="block">Domain Name</span></h2>
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
                    <p class="paragraph-md text-deep-blue-300 leading-9!">Select the domain name you wish to forward, look for the Domain Forwarding (also known as Redirect) option, and click Add New.</p>
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
                <x-displays.card-inside route="email" image="images/brand-1.jpg">Email</x-displays.card-inside>
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
