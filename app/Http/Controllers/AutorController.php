<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // USAMOS ELOQUENT PARA RETORNAR LOS DATOS EN UNA VARIABLE AUTORES
        $autores = Autor::all();
        // RETORNAMOS LA VISTA DE AUTORES Y COMPACTAMOS TODO LO QUE VIENE EN LA VARIABLE AUTORES
        return view('autores.index', compact('autores'));

        // // RETORNAMOS LA VISTA DEL FORMULARIO PARA CREAR UN LIBRO Y LE COMPACTAMOS LO QUE VIENE EN LA VARIABLE AUTORES
        // return view('libros.create', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Esta función de require validate restringe que campos se pueden registrar en la tabla desde el formulario
         $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'fecha_nacimiento' => 'required|date',
            'biografia_breve' => 'required',
            'premios_ganados' => 'required'
         ]);

        //  USAMOS ELOQUENT PARA CREAR EL REGISTRO EN LA BASE DE DATOS
         Autor::create($request->all());

        // REDIRECCIONAMOS A LA VISTA INDEX
        return redirect('/autores')
            ->with('success', 'Autor creado correctamente');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {

        return view('autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        // Esta función de require validate restringe que campos se pueden actualizar en la tabla desde el formulario
        $data = $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'fecha_nacimiento' => 'required',
            'biografia_breve' => 'required',
            'premios_ganados' => 'required'
        ]);

        // ACCEDEMOS CON ELOQUENT A LA FUNCIÓN UPDATE
        $autor->update($data);

        // REDIRECCIONAMOS CON UN MENSAJE DE CONFIRMACIÓN
        return redirect('/autores')
            ->with('success', 'Autor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        // ELIMINAMOS EL REGISTRO CON ELOQUENT
        $autor->delete($autor);

        // REDIRECCIONAMOS
        return redirect('/autores')
            ->with('success', 'Autor eliminado correctamente');
    }
}
