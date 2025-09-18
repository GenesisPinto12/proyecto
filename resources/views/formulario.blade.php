<x-app-layout>
    <x-slot name="header">
    </x-slot>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <br>
                
                <body>
                <h2 class="card-header">{{ __('Registrar Cliente y Póliza') }}</h2>
                </body>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
                            @error('nombres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="cedula" class="form-label">{{ __('Cédula de Identidad') }}</label>
                            <input type="text" class="form-control @error('cedula') is-invalid @enderror" id="cedula" name="cedula" value="{{ old('cedula') }}" required>
                            @error('cedula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duracion" class="form-label">{{ __('Duración de la póliza (meses)') }}</label>
                            <input type="number" class="form-control @error('duracion') is-invalid @enderror" id="duracion" name="duracion" value="{{ old('duracion') }}" min="1" required>
                            @error('duracion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">{{ __('Guardar Cliente') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
