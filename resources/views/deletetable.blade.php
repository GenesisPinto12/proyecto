<x-app-layout>

    <x-slot name="container">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes Eliminados/Ocultados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Estos son los clientes que han sido eliminados/ocultados.") }}
                </div>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>{{ __('Nombres') }}</th>
                <th>{{ __('Apellidos') }}</th>
                <th>{{ __('Cédula') }}</th>
                <th>{{ __('Número de Póliza') }}</th>
                <th>{{ __('Duración (meses)') }}</th>
                <th>{{ __('status') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->cedula }}</td>
                    <td>{{ $cliente->numero_poliza }}</td>
                    <td>{{ $cliente->duracion }}</td>
                    <td>{{ $cliente->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
