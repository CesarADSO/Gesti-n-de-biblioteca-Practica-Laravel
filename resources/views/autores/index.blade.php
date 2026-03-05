<!-- USAMOS EXTENDS('LAYOUTS.APP PARA IMPORTAR LO QUE SE ENCUENTRA EN LAYOUTS EN EL ARCHIVO APP.BLADE.PHP') -->
@extends('layouts.app')

<!-- AL USAR SECTION('CONTENT') LO QUE HACEMOS ES DECIRLE A LARAVEL QUE VAMOS A INCLUIR ESTA SECCIÓN EN UN YIELD('CONTENT') QUE SE ENCUENTRA EN LAYOUTS.APP -->
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<h1>Lista de autores</h1>
<a href="/autores/create" class="btn btn-dark my-3">Agregar Autor</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombres y apellidos</th>
            <th>Nacionalidad</th>
            <th>Fecha de nacimiento</th>
            <th>Premios ganados</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($autores as $autor)
        <tr>
            <td>{{ $autor->nombres }} {{ $autor->apellidos }}</td>
            <td>{{ $autor->nacionalidad }}</td>
            <td>{{ $autor->fecha_nacimiento }}</td>
            <td>{{ $autor->premios_ganados }}</td>
            <td>
                <a href="/autores/show/{{ $autor->id }}" class="btn btn-info text-white"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="/autores/edit/{{ $autor->id }}" class="btn btn-success text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="/autores/delete/{{ $autor->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- CERRAMOS LA SECTION -->
@endsection