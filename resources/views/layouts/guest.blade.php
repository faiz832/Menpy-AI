<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-12 sm:pt-0">
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/menpy-logo.png') }}" alt="Menpy AI Logo" class="h-20">
            </a>
        </div>

        <div class="w-full max-w-80 mt-6">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
