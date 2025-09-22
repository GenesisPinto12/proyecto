<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
        {{ __('Editar Cliente') }}
    </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Editar Cliente') }}</h3>
                <form method="POST" action="()">


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
                    </div>

                    <div class="mb-3">
                        <x-input-label for="cedula" class="form-label">{{ __('Cédula de Identidad') }}</x-input-label>
                        <input type="text" class="form-control @error('cedula') is-invalid @enderror" id="cedula" name="cedula" value="{{ old('cedula', $clientes->cedula) }}" required>
                        @error('cedula')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>


                    <div class="mb-3">
                        <x-input-label for="duracion" class="form-label">{{ __('Duración (meses)') }}</x-input-label>
                        <input type="number" class="form-control @error('duracion') is-invalid @enderror" id="duracion" name="duracion" value="{{ old('duracion', $clientes->duracion) }}" min="1" required>
                        @error('duracion')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-input-label for="numero_poliza" class="form-label">{{ __('Número de Póliza') }}</x-input-label>
                            <input type="text" class="form-control @error('numero_poliza') is-invalid @enderror" id="numero_poliza" name="numero_poliza" value="{{ old('numero_poliza', $clientes->numero_poliza) }}" required>
                            @error('numero_poliza')
                                <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                    <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>

                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

