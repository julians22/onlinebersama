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

    </div>
</main>

@endsection
