<!DOCTYPE html>
<html class="scroll-smooth h-full w-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-[#F5F5F9]">
        <livewire:components.sidebar-backend />

        <div class="lg:pl-[17rem] ">
            <livewire:components.nav-backend />
            
            <main class=" pt-4 pb-10 ">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
