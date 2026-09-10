<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Mensaje de bienvenida -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold">¡Bienvenido, {{ auth()->user()->name }}!</h1>
                    <p class="text-gray-600 dark:text-gray-400">AgroInsumos El Cultivador - Panel de Control</p>
                </div>
            </div>

            {{--
                Nota académica: los 4 valores de las tarjetas de abajo son de EJEMPLO.
                Cuando existan los modelos Eloquent de Producto, Cliente y Venta
                (módulos que aún no se han construido), reemplazar cada número por
                una consulta real, por ejemplo:
                    \App\Models\Product::count()
                    \App\Models\Client::count()
                    \App\Models\Sale::whereDate('created_at', today())->count()
                    \App\Models\Product::where('stock', '<', 10)->count()
            --}}

            <!-- Tarjetas de indicadores (KPIs) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-5 flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 text-xl">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total de productos</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">128</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-5 flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-amber-600 dark:text-amber-300 text-xl">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total de clientes</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">54</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-5 flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 text-xl">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Ventas del día</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">9</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-5 flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-red-100 dark:bg-red-900 flex items-center justify-center text-red-600 dark:text-red-300 text-xl">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Productos con bajo stock</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">6</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
