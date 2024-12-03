<?php

namespace App\Http\Controllers;

use App\Models\clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clasificaciones=clasificacion::all();
        return view('clasificaciones.consulta',['clasificaciones'=>$clasificaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clasificacion=clasificacion::all();
        return view('clasificaciones.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevaclasificacion=new clasificacion;
        $nuevaclasificacion->descripcion=$request->descripcion;
    
        
      
        $nuevaclasificacion->save();
        return redirect('/clasificacion');

    }

    /**
     * Display the specified resource.
     */
    public function show(clasificacion $clasificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clasificacion $clasificacion)
    {
        //
        $clasificacioneditar=clasificacion::findorfail($clasificacion);
        return view('clasificaciones.actualizacion', ['clasificacion' => $clasificacioneditar]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clasificacion $clasificacion)
    {
        //
        $nuevaclasificacion=clasificacion::findorfail($clasificacion);
        $nuevaclasificacion->descripcion=$request->descripcion;
        
       
        $nuevaclasificacion->save();
        return redirect('/clasificacion')->with('success', 'Se actualizo una clasificacion correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clasificacion $clasificacion)
    {
        //
        clasificacion::destroy($clasificacion);
        return redirect('/clasificacion');

    }
}
