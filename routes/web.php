<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middle ware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', HomeController::class)->name('home.index');
    /*
    Route::get('libros',[LibroController::class, 'index'])->name('libros.index'); 
    Route::get('libros/create',[LibroController::class,'create'])->name('libros.create');
    Route::post('libros',[LibroController::class,'store'])->name('libros.store');
    Route::get('libros/{libro}', [LibroController::class, 'show'])->name('libros.show');
    Route::get('libros/{libro}/edit', [LibroController::class, 'edit'])->name('libros.edit');
    Route::put('libros/{libro}', [LibroController::class, 'update'])->name('libros.update');
    Route::delete('libros/{libro}', [LibroController::class, 'destroy'])->name('libros.destroy');*/
    Route::resource('libros',LibroController::class);

    /*Route::get('personas',[PersonaController::class, 'index'])->name('personas.index'); 
    Route::get('personas/create',[PersonaController::class,'create'])->name('personas.create');
    Route::post('personas',[PersonaController::class,'store'])->name('personas.store');
    Route::get('personas/{persona}', [PersonaController::class, 'show'])->name('personas.show');
    Route::get('personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
    Route::put('personas/{persona}', [PersonaController::class, 'update'])->name('personas.update');
    Route::delete('personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy');*/

    Route::resource('personas',PersonaController::class);
