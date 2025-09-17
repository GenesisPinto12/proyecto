@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Cliente y Póliza</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración de la póliza (meses)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" min="1" required>
        </div>
        <!-- Número de póliza se genera automáticamente en backend -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection