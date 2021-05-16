<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="/logo/final-icon.png" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="/bstp/css/bootstrap-grid.css">
        <link rel="stylesheet" href="/bstp/css/bootstrap-grid.css.map">
        <link rel="stylesheet" href="/bstp/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/bstp/css/bootstrap-grid.min.css.map">
        <link rel="stylesheet" href="/bstp/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="/bstp/css/bootstrap-reboot.css.map">
        <link rel="stylesheet" href="/bstp/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="/bstp/css/bootstrap-reboot.min.css.map"> 
        <link rel="stylesheet" href="/bstp/css/bootstrap.css">       
        <link rel="stylesheet" href="/bstp/css/bootstrap.css.map">
        <link rel="stylesheet" href="/bstp/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bstp/css/bootstrap.min.css.map">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="/bstp/js/bootstrap.js"></script>
        <script src="/bst/js/bootstrap.bundle.js.map"></script>
        <script src="/bst/js/bootstrap.bundle.min.js"></script>
        <script src="/bstp/js/bootstrap.bundle.min.js.map"></script>
        <script src="/bstp/js/bootstrap.js"></script>
        <script src="/bstp/js/bootstrap.js.map"></script>
        <script src="/bstp/js/bootstrap.min.js"></script>
        <script src="/bstp/js/bootstrap.min.js.map"></script>


    </body>
</html>
