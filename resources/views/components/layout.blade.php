<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Todoアプリ' }}</title>
    </head>
    <body class="flex flex-col min-h-[100vh]">
        <header class="bg-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="py-6">
                    <p class="text-white text-xl">Todoアプリ</p>
                </div>
            </div>
        </header>
        
        {{ $slot }}
        <footer class="bg-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="py-4 text-center">
                    <p class="text-white text-sm"></p>
                </div>
            </div>
        </footer>
    </body>
</html>