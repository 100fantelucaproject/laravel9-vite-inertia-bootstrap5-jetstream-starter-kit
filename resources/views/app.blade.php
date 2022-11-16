<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Scripts -->
        @routes

        @vite(['resources/sass/app.scss', 'resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])

        @inertiaHead
    </head>
    <body class="bg-light">

        @inertia
        
    </body>
</html>
