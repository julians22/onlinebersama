@extends('app')

@section('content')

<main>
    {{-- Sample Components --}}
    <div class="container-extra-smaller space-y-[72px]">
        <x-articles.quote-callout>
            <p class="paragraph-md text-deep-blue-300">The easiest way to create a hook is to identify a problem that ... needs fixing and then suggest a reasonable way to fix it.</p>
        </x-articles.quote-callout>

        <x-articles.tip-callout>
            <x-slot:title>
                <p class="paragraph-md text-deep-blue-300">TIP</p>
            </x-slot:title>
            <p class="paragraph-md text-deep-blue-300">Check to see if your domain name retailer offers business email services. Some offer a variety of business email plans that can easily be bundled with your domain name registration.</p>
        </x-articles.tip-callout>

        <h3 class="subheadline-2 text-deep-blue-300">Some questions you might consider exploring?</h3>

        <div class="h-[75px] flex items-center">
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


    </div>
</main>

@endsection
