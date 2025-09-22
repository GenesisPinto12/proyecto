<x-app-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br>
                <body>
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
                        {{ __('Listado de Clientes y Pólizas') }}
                    </h2>
                </body>

<div class="card p-4 shadow-sm border rounded">
    <form method="POST" action="{{ route('register') }}">
        @csrf
    </form>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('clientes.store') }}" method="POST">

                        <div class="mb-3">
                            <x-input-label for="nombres" class="form-label">{{ __('Nombres') }}</x-input-label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
                            @error('nombres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-input-label for="apellidos" class="form-label">{{ __('Apellidos') }}</x-input-label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-input-label for="cedula" class="form-label">{{ __('Cédula de Identidad') }}</x-input-label>
                            <input type="text" class="form-control @error('cedula') is-invalid @enderror" id="cedula" name="cedula" value="{{ old('cedula') }}" required>
                            @error('cedula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-input-label for="duracion" class="form-label">{{ __('Duración de la póliza (meses)') }}</x-input-label>
                            <input type="number" class="form-control @error('duracion') is-invalid @enderror" id="duracion" name="duracion" value="{{ old('duracion') }}" min="1" required>
                            @error('duracion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary text-sm text-gray-600 dark:text-gray-400">{{ __('Guardar Cliente') }}</button>

                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
