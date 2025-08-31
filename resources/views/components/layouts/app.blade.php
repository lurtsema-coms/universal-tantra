<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="h-dvh flex flex-col bg-black">
        <livewire:components.nav />
        <div class="flex-1">
            {{ $slot }}
        </div>
        <livewire:components.footer />
    </body>
</html>
