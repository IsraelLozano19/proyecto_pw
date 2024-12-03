<!-- resources/views/catalogo/consulta.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consulta del Catálogo') }}
        </h2>
    </x-slot>

    <!-- Incluir archivo CSS en el encabezado principal -->
    <head>
        <link rel="stylesheet" href="{{ asset('css/estilos_catalogo_consulta.css') }}">
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido a la Consulta del Catálogo") }}

                    <!-- Botones de acciones -->
                    <div class="mb-4 text-right">
                        <a href="{{ route('catalogo.create') }}" class="btn btn-custom">Agregar</a>
                        <button class="btn btn-custom">Eliminar</button>
                        <button class="btn btn-custom">Actualizar</button>
                    </div>


                    <!-- Tabla de información -->
                    <div class="table-responsive">
                        <button class="btn btn-custom">Agregar a compra</button>
                        <table class="table table-striped table-bordered table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catalogo as $item)
                                    <tr>
                                        <td>{{ $item->id_instrumento }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->tipo }}</td>
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