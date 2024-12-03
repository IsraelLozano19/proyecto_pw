<!-- resources/views/catalogo/actualizar.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Catálogo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ __("Actualizar los detalles del catálogo") }}</h1>

                    <!-- Formulario de actualización -->
                    <form action="{{ route('catalogo.update', $catalogo->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control w-100" id="nombre" name="nombre" value="{{ old('nombre', $catalogo->nombre) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control w-100" id="tipo" name="tipo" value="{{ old('tipo', $catalogo->tipo) }}" required>
                        </div>

                        <!-- Selección de Clasificación -->
                        <div class="mb-3">
                            <label for="clasificacion_id" class="form-label">Clasificación</label>
                            <select id="clasificacion_id" name="clasificacion_id" class="form-control w-100" required>
                                @foreach ($clasificaciones as $clasificacion)
                                    <option value="{{ $clasificacion->id }}" {{ $catalogo->clasificacion_id == $clasificacion->id ? 'selected' : '' }}>
                                        {{ $clasificacion->descripcion }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-custom">Actualizar</button>
                            <a href="{{ route('catalogo.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>