<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
        {{ __('Informaciom') }}
    </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Editar Cliente') }}</h3>
                <form method="POST" action="()">


                    <div class="mb-3">
                        <x-input-label for="name" class="form-label">{{ __('Datos de la persona que ingreso la información') }}</x-input-label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                        <div class="mb-3">
                        <x-input-label for="date" class="form-label">{{ __('Fecha y hora') }}</x-input-label>
                        <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $cliente->created_at) }}" required>
                        @error('date')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>

                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <x-input-label for="nombres" class="form-label">{{ __('Nombres') }}</x-input-label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres', $clientes->nombres) }}" required>
                        @error('nombres')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <x-input-label for="apellidos" class="form-label">{{ __('Apellidos') }}</x-input-label>
                        <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos', $clientes->apellidos) }}" required>
                        @error('apellidos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror





                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

