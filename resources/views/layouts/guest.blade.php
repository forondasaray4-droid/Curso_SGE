<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'AgroInsumos El Cultivador') }}</title>

        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- Iconos (Font Awesome) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif; }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-green-800 via-green-700 to-green-900">
            <div class="text-center">
                <a href="/" class="inline-block bg-white rounded-2xl px-6 py-3 shadow-lg">
                    <x-application-logo />
                </a>
                <p class="mt-3 text-green-50 text-sm max-w-xs mx-auto">
                    Software de Gestión Empresarial para el sector agrícola
                </p>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white dark:bg-gray-800 shadow-xl overflow-hidden sm:rounded-2xl">
                {{ $slot }}
            </div>

            <p class="mt-6 text-green-100 text-xs">
                &copy; {{ date('Y') }} AgroInsumos El Cultivador S.A.S.
            </p>
        </div>
    </body>
</html>
