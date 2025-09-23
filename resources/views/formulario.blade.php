<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Registrar Cliente') }}</h3>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('clientes.store') }}">
    @csrf
   <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-700">
    <div>
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
        @error('nombres')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
        @error('apellidos')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cedula">Cédula: </label>
        <input type="text" id="cedula" name="cedula" value="{{ old('cedula') }}" required>
        @error('cedula')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="duracion">Duración (Meses):</label>
        <input type="number" id="duracion" name="duracion" value="{{ old('duracion') }}" required min="1">
        @error('duracion')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="status">Estado:</label>
        <select id="status" name="status">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
        </select>
        @error('status')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Registrar Cliente</button>
</form>
</x-app-layout>
