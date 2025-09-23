<!-- ... tu código HTML existente ... -->

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
    @csrf {{-- ¡Importante para la seguridad! --}}

    <div>
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
        @error('nombres')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
        @error('apellidos')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value="{{ old('cedula') }}" required>
        @error('cedula')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="duracion">Duración (años):</label>
        <input type="number" id="duracion" name="duracion" value="{{ old('duracion') }}" required min="1">
        @error('duracion')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="status">Estado:</label>
        <select id="status" name="status">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
        </select>
        @error('status')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Registrar Cliente</button>
</form>
