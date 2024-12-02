<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\BodegaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/catalogo/consulta', [CatalogoController::class, 'index'])->name('catalogo.index');
    Route::get('/catalogo/agregar', [CatalogoController::class, 'create'])->name('catalogo.create'); 
    Route::post('/catalogo', [CatalogoController::class, 'store'])->name('catalogo.store');

    // Ruta para Editar (Actualizar)
    Route::get('/catalogo/actualizar', [CatalogoController::class, 'edit'])->name('catalogo.edit');

    // Ruta para Eliminar (Baja)
    Route::delete('/catalogo/{catalogo}', [CatalogoController::class, 'destroy'])->name('catalogo.destroy');

    

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
