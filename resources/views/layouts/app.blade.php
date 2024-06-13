<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    @vite(['resources/js/app.js'])

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--Sweet Alerts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>

    </style>
</head>

<body>

    @include('layouts.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>

</html>