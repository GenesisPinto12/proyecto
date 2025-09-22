<x-app-layout>

    <x-slot name="container"></x-slot>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Detalles del Cliente') }}
        </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Información del Cliente') }}</h3>
                    <table class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Nombres</th>
                                <th class="border border-gray-300 px-4 py-2">Apellidos</th>
                                <th class="border border-gray-300 px-4 py-2">Cédula</th>
                                <th class="border border-gray-300 px-4 py-2">Número de Póliza</th>
                                <th class="border border-gray-300 px-4 py-2">Duración (meses)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $cliente->nombres }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $cliente->apellidos }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $cliente->cedula }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $cliente->numero_poliza }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $cliente->duracion }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
