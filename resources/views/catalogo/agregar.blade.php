<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Instrumento') }}
        </h2>
        <!-- Incluir archivo CSS -->
        <link rel="stylesheet" href="{{ asset('css/estilos_catalogo_agregar.css') }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ __("Agregar un nuevo instrumento al catálogo") }}</h1>

                    <!-- Botón de regresar debajo del título -->
                    <div class="mb-4">
                        <a href="{{ route('catalogo.index') }}" class="btn btn-custom">Regresar</a>
                    </div>

                    <!-- Formulario de agregar instrumento -->
                    <form action="{{ route('catalogo.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Instrumento</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="clasificacion" class="form-label">Clasificación</label>
                            <select class="form-select" id="clasificacion" name="clasificacion" required>
                                @foreach($clasificacion as $item)
                                    <option value="{{ $item->id_clasificacion }}">{{ $item->id_clasificacion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-custom">Aceptar</button>
                    </form>

                    <!-- Tabla de clasificación -->
                    <div class="table-responsive mb-4" style="flex: 1 1 48%;">
                        <h3>Tabla de clasificación</h3>
                        <table class="table table-striped table-bordered table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Clasificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clasificacion as $item)
                                    <tr>
                                        <td>{{ $item->id_clasificacion }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
