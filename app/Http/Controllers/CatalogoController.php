<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Clasificacion;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Catalogo::all();
        return view('catalogo.consulta', compact('catalogo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clasificacion = Clasificacion::all();
        return view('catalogo.agregar', compact('clasificacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'clasificacion' => 'required|exists:clasificaciones,id',
        ]);

        Catalogo::create([
            'nombre' => $request->nombre,
            'clasificacion_id' => $request->clasificacion,
        ]);

        return redirect()->route('catalogo.index')->with('success', 'Instrumento agregado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $catalogoedit = Catalogo::findOrFail($id);
        $clasificaciones = Clasificacion::all();
        return view('catalogos.actualizar', ['catalogo' => $catalogoedit, 'clasificaciones' => $clasificaciones]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Catalogo::destroy($id);
        return redirect('/catalogo');
    }
}
