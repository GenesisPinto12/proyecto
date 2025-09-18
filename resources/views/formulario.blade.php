@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Registrar Cliente</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required>
            @error('nombres')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" required>
            @error('apellidos')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula de Identidad</label>
            <input type="text" name="cedula" id="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{ old('cedula') }}" required>
            @error('cedula')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración de la póliza (meses)</label>
            <input type="number" name="duracion" id="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion') }}" min="1" required>
            @error('duracion')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrar Cliente</button>
    </form>
</div>
@endsection

