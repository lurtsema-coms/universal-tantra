<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Universal Tantra</title>
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-dvh relative bg-black text-white overflow-hidden">
        <x-frontend.c-bg1 :blur="true"/>
        <div class="flex flex-col justify-center items-center h-full">
            <x-frontend.c-header-lg 
                :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
                :message="'Coming Soon'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm !text-center max-w-2xl mx-auto'"
                :message="'Where breath is invitation and presence awakens'"
            />
            <img src="{{ asset('img/UT-Logo.png') }}" alt="UT Logo" class="max-w-64 mt-4">
        </div>
    </body>
</html>
