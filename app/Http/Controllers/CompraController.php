<?php

namespace App\Http\Controllers;

use App\Models\compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function agregar(Request $request) { $id_instrumento = $request->input('id_instrumento'); $id_user = 1; // Asigna un ID de usuario según corresponda 
        $total = 0; $fecha = now(); 
        // Obtener el precio del instrumento 
        $instrumento = DB::table('instrumentos')->where('id_instrumento', $id_instrumento)->first(); 
        if ($instrumento) { 
            $total = $instrumento->precio; 
        } 
        // Insertar en la tabla de compras 
        DB::table('compras')->insert([ 
            'fecha' => $fecha, 
            'id_instrumento' => $id_instrumento, 
            'id_user' => $id_user, 
            'total' => $total, 
        ]); 
        return redirect()->back()->with('success', 'Compra agregada exitosamente'); 
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compra $compra)
    {
        //
    }
}
