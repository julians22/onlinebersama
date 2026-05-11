<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <script type="text/plain" class="optanon-category-C0001" src="//assets.adobedtm.com/1d6e8340b68d/b0c6093737cf/launch-adacc40eeb69-staging.min.js" defer></script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- Vite Resource --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
    <x-navbar />
        @yield('content')
    <x-footer />
    @livewireScripts
    @stack('scripts')
</body>
</html>
