@extends('app')

@section('content')

<main data-analytics-level1="body">
    {{-- Sample Components --}}
    <div class="container-extra-smaller space-y-18 py-10">
        <x-articles.quote-callout>
            <p class="paragraph-md text-deep-blue-300 md:leading-8.5!">The easiest way to create a hook is to identify a problem that ... needs fixing and then suggest a reasonable way to fix it.</p>
        </x-articles.quote-callout>

        <x-articles.tip-callout>
            <x-slot:title>
                <p class="paragraph-md text-deep-blue-300">TIP</p>
            </x-slot:title>
            <p class="paragraph-md text-deep-blue-300 md:leading-8.5!">Check to see if your domain name retailer offers business email services. Some offer a variety of business email plans that can easily be bundled with your domain name registration.</p>
        </x-articles.tip-callout>

        <h3 class="subheadline-2 text-deep-blue-300">Some questions you might consider exploring?</h3>

        <div class="flex items-center py-4">
            <h4 class="subheadline-4 font-semibold!">Related Article</h4>
        </div>

        <x-articles.numbered-card :number="1">
            <p class="paragraph-sm font-bold! text-deep-blue-300">What do you find frustrating in everyday life?</p>
        </x-articles.numbered-card>

        <div class="flex gap-4 flex-wrap self-stretch items-start content-start">
            <x-articles.numbered-card class="flex-1" :number="1">
                <p class="paragraph-sm font-bold! text-deep-blue-300">What do you find frustrating in everyday life?</p>
            </x-articles.numbered-card>
            <x-articles.numbered-card class="flex-1" :number="2">
                <p class="paragraph-sm font-bold! text-deep-blue-300">What do you wish you could automate?</p>
            </x-articles.numbered-card>
            <x-articles.numbered-card class="flex-1" :number="3">
                <p class="paragraph-sm font-bold! text-deep-blue-300">What task do you wish you never had to do again?</p>
            </x-articles.numbered-card>
        </div>

        <x-articles.arrow-item-content>

            <div class="flex gap-2 flex-col flex-1">
                <h3 class="subheadline-3">Title</h3>
                <p class="paragraph-md">Shared Web and Email Hosting - Provided by related businesses that also host domain names, e.g., domain name retailers. This offers a high level of convenience for businesses looking to streamline their online presence.</p>
            </div>

        </x-articles.arrow-item-content>

        <x-articles.step-item :number="1">
            <div class="flex gap-2 flex-col flex-1">
                <h3 class="subheadline-3 text-deep-blue-300">Consider your name</h3>
                <p class="paragraph-md text-deep-blue-300">Are you the face of your project, idea, or company? Try using your own name. Customers may like the personalization it brings, for example, JoesDeepDishPizza.com.</p>
            </div>
        </x-articles.step-item>

        <x-articles.intro-and-quicklinks>

            <p class="paragraph-md text-deep-blue-300">You may have heard the terms “website” and “landing page” used interchangeably, but it’s important to note a key difference between the two. A website is focused on your company: what you offer, who you are, and why and how you do what you do. A landing page is focused on getting visitors to take one step towards becoming customers, like filling out a form for an email newsletter. We call this the “call-to-action” or CTA.</p>

        </x-articles.intro-and-quicklinks>


    </div>
</main>

@endsection
