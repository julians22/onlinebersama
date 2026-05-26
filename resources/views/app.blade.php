<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param-name" content="_token">
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', config('app.name', 'Laravel'))">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="author" content="@yield('meta_author', '')">

    <!-- Analytics Scripts -->
    @env(['staging', 'local', 'testing'])
        <!-- OneTrust Cookies Consent Notice start for onlinebersama.com -->
        <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="019dac2e-6419-7678-bb88-2fce4bccca28-test" ></script>
        <script type="text/javascript">
        function OptanonWrapper() { }
        </script>
        <!-- OneTrust Cookies Consent Notice end for onlinebersama.com -->

        <!-- ADOBE SCRIPT -->
        <script type="text/plain" class="optanon-category-C0001" src="//assets.adobedtm.com/1d6e8340b68d/b0c6093737cf/launch-adacc40eeb69-staging.min.js" defer></script>
    @endenv

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Vite scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- NameStudio start-->
    <script async type="module" src="https://nswm-service.verisign.com/3.0/name-studio.js"></script>
    <!-- NameStudio end-->

    <script id="namestudio-scripts" data-ns-revision="2026-05-11">
    (() => {
    document.addEventListener('DOMContentLoaded', () => {
        const $ns = document.querySelector('name-studio');
        $ns.querySelector('button[slot="btn-results-close"]')
        .addEventListener('click', () => {
        $ns.clearQuery();
        $ns.clear();
        });
    });
    })();
    </script>
</head>
<body class="antialiased">
    <x-navbar />
        @yield('content')
    <x-footer />
    @livewireScripts
    @stack('scripts')
</body>
</html>
