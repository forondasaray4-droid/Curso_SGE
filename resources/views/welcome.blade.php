<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AgroInsumos El Cultivador - Software de Gestión Empresarial</title>
        <meta name="description" content="Software de Gestión Empresarial (ERP) para AgroInsumos El Cultivador: control de inventario por lotes, ventas, clientes y alertas de vencimiento.">

        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

        <!-- Iconos (Font Awesome) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif; }
        </style>
    </head>
    <body class="antialiased bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100">

        <!-- Barra superior -->
        <header class="absolute top-0 inset-x-0 z-20">
            <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
                <div class="inline-flex items-center gap-2 text-white">
                    <span class="text-2xl leading-none">🌾</span>
                    <span class="flex flex-col leading-tight">
                        <span class="font-bold">AgroInsumos</span>
                        <span class="text-[10px] font-semibold text-amber-300 -mt-1">El Cultivador</span>
                    </span>
                </div>

                @if (Route::has('login'))
                    <nav class="flex items-center gap-3">
                        @auth
                            <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-md text-sm font-medium text-white bg-white/10 hover:bg-white/20 transition">
                                Ir al panel
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-white/10 transition">
                                Iniciar sesión
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 rounded-md text-sm font-semibold text-green-900 bg-amber-400 hover:bg-amber-300 transition">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>

        <!-- Hero -->
        <section class="relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 text-white overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 20% 20%, white 1px, transparent 1px); background-size: 24px 24px;"></div>

            <div class="relative max-w-5xl mx-auto px-6 pt-36 pb-24 text-center">
                <span class="inline-block px-4 py-1 rounded-full bg-white/10 text-amber-300 text-xs font-semibold tracking-wide uppercase mb-6">
                    Sistema de Gestión Empresarial
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">
                    Gestiona tu almacén agrícola<br class="hidden sm:block"> sin perder ni un lote
                </h1>
                <p class="mt-6 text-lg text-green-100 max-w-2xl mx-auto">
                    AgroInsumos El Cultivador S.A.S. — controla inventario por lotes, precios por temporada,
                    alertas de vencimiento, clientes y ventas, todo desde un solo lugar.
                </p>

                <div class="mt-10 flex items-center justify-center gap-4 flex-wrap">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-6 py-3 rounded-lg font-semibold text-green-900 bg-amber-400 hover:bg-amber-300 transition shadow-lg">
                            <i class="fa-solid fa-user-plus mr-2"></i>Crear cuenta
                        </a>
                    @endif
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="px-6 py-3 rounded-lg font-semibold text-white border border-white/40 hover:bg-white/10 transition">
                            <i class="fa-solid fa-right-to-bracket mr-2"></i>Iniciar sesión
                        </a>
                    @endif
                </div>
            </div>
        </section>

        <!-- Características / módulos -->
        <section class="max-w-6xl mx-auto px-6 py-20">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold">Módulos del sistema</h2>
                <p class="mt-3 text-gray-500 dark:text-gray-400">
                    Diseñado para las necesidades reales de un almacén de insumos agrícolas.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition">
                    <div class="h-12 w-12 rounded-xl bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 text-xl mb-4">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Inventario por lotes</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Cada remesa de producto se controla como un lote independiente, con su propia fecha de vencimiento.
                    </p>
                </div>

                <div class="p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition">
                    <div class="h-12 w-12 rounded-xl bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-amber-600 dark:text-amber-300 text-xl mb-4">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Alertas de vencimiento</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Notificaciones automáticas antes de que un lote venza, aplicando la lógica FEFO.
                    </p>
                </div>

                <div class="p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition">
                    <div class="h-12 w-12 rounded-xl bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 text-xl mb-4">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Precios por temporada</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Define precios distintos según la época del año, sin tocar el catálogo base de productos.
                    </p>
                </div>

                <div class="p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition">
                    <div class="h-12 w-12 rounded-xl bg-purple-100 dark:bg-purple-900 flex items-center justify-center text-purple-600 dark:text-purple-300 text-xl mb-4">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Clientes y ventas</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Gestión de agricultores, fincas y cooperativas, con historial completo de compras.
                    </p>
                </div>
            </div>
        </section>

        <!-- Testimonios (ilustrativos, proyecto académico) -->
        <section class="bg-gray-50 dark:bg-gray-800/50 py-20">
            <div class="max-w-5xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Pensado para el día a día del campo</h2>

                <div class="grid sm:grid-cols-2 gap-6">
                    <blockquote class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm">
                        <p class="text-gray-600 dark:text-gray-300 italic">
                            "Antes perdíamos producto por no saber qué lote iba a vencer primero. Ahora el sistema nos avisa antes de que pase."
                        </p>
                        <footer class="mt-4 text-sm font-semibold text-gray-800 dark:text-gray-100">
                            — Agricultor, Finca La Esperanza <span class="font-normal text-gray-400">(caso ilustrativo)</span>
                        </footer>
                    </blockquote>

                    <blockquote class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm">
                        <p class="text-gray-600 dark:text-gray-300 italic">
                            "Poder cambiar el precio de los fertilizantes según la temporada sin dañar el historial fue justo lo que necesitábamos."
                        </p>
                        <footer class="mt-4 text-sm font-semibold text-gray-800 dark:text-gray-100">
                            — Administrador, Cooperativa Agrícola del Valle <span class="font-normal text-gray-400">(caso ilustrativo)</span>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-green-950 text-green-100">
            <div class="max-w-6xl mx-auto px-6 py-12 grid sm:grid-cols-3 gap-8">
                <div>
                    <div class="inline-flex items-center gap-2 text-white mb-3">
                        <span class="text-xl leading-none">🌾</span>
                        <span class="font-bold">AgroInsumos El Cultivador</span>
                    </div>
                    <p class="text-sm text-green-300">
                        Almacén de venta de insumos agrícolas: semillas, fertilizantes, agroquímicos, herramientas y equipos de riego.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-3">Contacto</h4>
                    <ul class="text-sm space-y-2 text-green-300">
                        <li><i class="fa-solid fa-location-dot mr-2"></i>Vereda El Progreso, Colombia</li>
                        <li><i class="fa-solid fa-phone mr-2"></i>+57 300 000 0000</li>
                        <li><i class="fa-solid fa-envelope mr-2"></i>contacto@agroinsumoscultivador.com</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-3">Sistema</h4>
                    <ul class="text-sm space-y-2 text-green-300">
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}" class="hover:text-white transition">Iniciar sesión</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="hover:text-white transition">Crear cuenta</a></li>
                        @endif
                        <li>Proyecto Laravel del curso COTECNOVA - 2026</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-green-800 text-center text-xs text-green-400 py-4">
                &copy; {{ date('Y') }} AgroInsumos El Cultivador S.A.S. — SGE v1.0
            </div>
        </footer>
    </body>
</html>
