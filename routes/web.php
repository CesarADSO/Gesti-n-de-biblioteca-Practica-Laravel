<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RUTA PARA MOSTRAR LA VISTA DE AUTORES
    Route::get('/autores', [AutorController::class, 'index']);

    // RUTA PARA MOSTRAR EL FORMULARIO DE CREACIÓN DE UN AUTOR
    Route::get('/autores/create', [AutorController::class, 'create']);

    // RUTA PARA GUARDAR LOS DATOS DE UN NUEVO AUTOR
    Route::post('/autores', [AutorController::class, 'store']);

    // RUTA PARA CONSULTAR EL DETALLE DE UN AUTOR
    Route::get('/autores/show/{autor}', [AutorController::class, 'show']);

    // RUTA PARA MOSTRAR EL FORMULARIO DE EDITAR
    Route::get('/autores/edit/{autor}', [AutorController::class, 'edit']);

    // RUTA PARA ACTUALIZAR LOS DATOS DE UN REGISTRO EXISTENTE
    Route::put('/autores/update/{autor}', [AutorController::class, 'update']);

    // RUTA PARA ELIMINAR UN AUTOR
    Route::delete('/autores/delete/{autor}', [AutorController::class, 'destroy']);

    // -----------------------------------------------------------------------------------------------------
    // RUTA PARA MOSTRAR LA VISTA DE LOS LIBROS
    Route::get('/libros', [LibroController::class, 'index']);

    // RUTA PARA MOSTRAR EL FORMULARIO DE CREACIÓN DE UN LIBRO
    Route::get('/libros/create', [LibroController::class, 'create']);

    // RUTA PARA GUARDAR LOS DATOS DE UN NUEVO LIBRO
    Route::post('/libros', [LibroController::class, 'store']);

    // RUTA PARA MOSTRAR EL DETALLE DE UN LIBRO EN ESPECÍFICO
    Route::get('/libros/show/{libro}', [LibroController::class, 'show']);

    // RUTA PARA MOSTRAR EL FORMULARIO DE EDITAR
    Route::get('/libros/edit/{libro}', [LibroController::class, 'edit']);

    // RUTA PARA ACTUALIZAR UN REGISTRO
    Route::put('/libros/update/{libro}', [LibroController::class, 'update']);

    // RUTA PARA ELIMINAR UN LIBRO
    Route::delete('/libros/delete/{libro}', [LibroController::class, 'destroy']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

require __DIR__ . '/auth.php';
