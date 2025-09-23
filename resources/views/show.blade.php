<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
        {{ __('Informacióm') }}
    </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Editar Cliente') }}</h3>
                <form method="patch" action="()">



                    <div class="mb-3">
                        <x-input-label for="name" class="form-label">{{ __('Datos de la persona que ingreso la información') }}</x-input-label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="name" name="name" value="{{ old('name', $users->name) }}" required>
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
                        @enderror



                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <x-input-label for="nombres" class="form-label">{{ __('Nombres') }}</x-input-label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="name" name="name" value="{{ old('name', $clientes->nombres) }}" required>
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

                    <div>
                        <x-input-label for="cedula" class="form-label">{{ __('Cédula') }}</x-input-label>
                        <input type="text" class="form-control @error('cedula') is-invalid @enderror" id="cedula" name="cedula" value="{{ old('cedula', $clientes->cedula) }}" required>
                        @error('cedula')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                        @enderror

                        <div>
                            <x-input-label for="duracion" class="form-label">{{ __('Duración (meses)') }}</x-input-label>
                            <input type="number" class="form-control @error('duracion') is-invalid @enderror" id="duracion" name="duracion" value="{{ old('duracion', $clientes->duracion) }}" required min="1">
                            @error('duracion')
                                <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="status" class="form-label">{{ __('Estado') }}</x-input-label>
                            <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="active" {{ old('status', $clientes->status) == 'active' ? 'selected' : '' }}>Activo</option>
                                <option value="inactive" {{ old('status', $clientes->status) == 'inactive' ?'selected' : '' }}>Inactivo</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>


                    </div>
                    <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">{{ __('Actualizar Cliente') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

