<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $modulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-10 text-center">
                <div class="h-16 w-16 mx-auto rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 text-2xl mb-4">
                    <i class="fa-solid {{ $icono }}"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Módulo en construcción</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    El listado de {{ strtolower($modulo) }} se implementará en una próxima clase, cuando se creen su modelo, migración y vistas.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
