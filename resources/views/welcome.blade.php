<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GoFitMx - @yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Scripts -->
        @stack('head-scripts')
    </head>
    <body class="bg-gray-950 text-gray-100" x-data="{ mobileMenuOpen: false }">
            <!-- Page Header -->
            @include('layouts.header')

            <!-- Page Content -->
                @yield('content')

            <!-- Page Footer -->
            @include('layouts.footer')

        <!-- Scripts -->
        @stack('scripts')
    </body>
</html>
