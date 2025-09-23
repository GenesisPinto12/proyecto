<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Editar Cliente') }}</h3>
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

<form method="POST" action="{{ route('clientes.update', $cliente) }}">
    @csrf
    @method('PATCH')

    <div>
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}" required>
        @error('nombres')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos', $cliente->apellidos) }}" required>
        @error('apellidos')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value="{{ old('cedula', $cliente->cedula) }}" required>
        @error('cedula')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="duracion">Duración (Meses):</label>
        <input type="number" id="duracion" name="duracion" value="{{ old('duracion', $cliente->duracion) }}" required min="1">
        @error('duracion')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="status">Estado:</label>
        <select id="status" name="status">
            <option value="active" {{ old('status', $cliente->status) == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status', $cliente->status) == 'inactive' ? 'selected' : '' }}>Inactivo</option>
        </select>
        @error('status')
            <p class="px-6 py-3 text-start text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Actualizar Cliente</button>
</form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
