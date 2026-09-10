<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Nuevo producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-8">

                {{--
                    Nota académica: este formulario es solo visual (Captura 6 del entregable),
                    para mostrar la coherencia de estilo con el resto del sistema. Guardar
                    todavía no funciona porque el modelo Product y su migración aún no existen.
                --}}

                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div>
                        <x-input-label for="nombre" value="Nombre del producto" />
                        <x-text-input id="nombre" name="nombre" type="text" class="block mt-1 w-full" placeholder="Ej. Fertilizante Triple 15" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="categoria" value="Categoría" />
                        <select id="categoria" name="categoria" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 focus:ring-green-600 rounded-md shadow-sm">
                            <option value="semillas">Semillas</option>
                            <option value="fertilizantes">Fertilizantes</option>
                            <option value="agroquimicos">Agroquímicos</option>
                            <option value="herramientas">Herramientas</option>
                            <option value="riego">Riego</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="proveedor" value="Proveedor" />
                        <x-text-input id="proveedor" name="proveedor" type="text" class="block mt-1 w-full" placeholder="Ej. Distribuidora Agroquímica S.A.S." />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="unidad_medida" value="Unidad de medida" />
                        <select id="unidad_medida" name="unidad_medida" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 focus:ring-green-600 rounded-md shadow-sm">
                            <option value="kg">Kilogramo (kg)</option>
                            <option value="litro">Litro</option>
                            <option value="bulto">Bulto</option>
                            <option value="unidad">Unidad</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end gap-3 mt-6">
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            Cancelar
                        </a>
                        <x-primary-button>
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Guardar producto
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
