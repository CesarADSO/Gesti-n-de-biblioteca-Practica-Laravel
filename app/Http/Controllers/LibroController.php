<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // EN LA VARIABLE LIBROS USAMOS ELOQUENT PARA RETORNAR TODOS LOS DATOS
        $libros = Libro::with('autor')->get();
        // RETORNAMOS LA VISTA Y LE COMPACTAMOS LO QUE VIENE EN LA VARIABLE LIBROS
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // EN LA VARIABLE AUTORES OBTENEMOS TODOS LOS DATOS DEL AUTOR
        $autores = Autor::all();
        // RETORNAMOS LA VISTA DEL FORMULARIO DE CREACIÓN DE LOS LIBROS Y LE COMPACTAMOS LO QUE VIENE EN AUTORES
        return view('libros.create', compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // HACEMOS UN REQUEST VALIDATE PARA VALIDAR QUE LOS DATOS QUE SE VAN A REGISTRAR SEAN LOS CAMPOS DEL FORMULARIO
        $request->validate([
            'titulo' => 'required',
            'estado_fisico' => 'required',
            'fecha_publicacion' => 'required',
            'editorial' => 'required',
            'genero' => 'required',
            'numero_paginas' => 'required',
            'idioma' => 'required',
            'id_autor' => 'required'
        ]);

        //  USAMOS ELOQUENT PARA CREAR EL REGISTRO EN LA BASE DE DATOS
        Libro::create($request->all());

        // REDIRECCIONAMOS
        return redirect('/libros')
            ->with('success', 'Libro registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        // RETORNAMOS LA VISTA DEL DETALLE
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        $autores = Autor::all();
        return view('libros.edit', compact('autores', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        // Esta función de require validate restringe que campos se pueden actualizar en la tabla desde el formulario
        $data = $request->validate([
            'titulo' => 'required',
            'estado_fisico' => 'required',
            'fecha_publicacion' => 'required',
            'editorial' => 'required',
            'genero' => 'required',
            'numero_paginas' => 'required',
            'idioma' => 'required',
            'id_autor' => 'required'
        ]);

        $libro->update($data);

        return redirect('/libros')
        ->with('success', 'Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete($libro);

        return redirect('/libros')->with('success', 'Libro eliminado correctamente');
    }
}
