<!-- USAMOS EXTENDS('LAYOUTS.APP PARA IMPORTAR LO QUE SE ENCUENTRA EN LAYOUTS EN EL ARCHIVO APP.BLADE.PHP') -->
@extends('layouts.app')

<!-- AL USAR SECTION('CONTENT') LO QUE HACEMOS ES DECIRLE A LARAVEL QUE VAMOS A INCLUIR ESTA SECCIÓN EN UN YIELD('CONTENT') QUE SE ENCUENTRA EN LAYOUTS.APP -->
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<h1>Lista de libros</h1>
<a href="/libros/create" class="btn btn-dark my-3">Agregar libro</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Género</th>
            <th>Idioma</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($libros))
        @foreach($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor->nombres }} {{ $libro->autor->apellidos }}</td>
            <td>{{ $libro->genero }}</td>
            <td>{{ $libro->idioma }}</td>
            <td>
                <a href="/libros/show/{{ $libro->id }}" class="btn btn-sm btn-info text-white"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="/libros/edit/{{$libro->id}}" class="btn btn-sm btn-success text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="/libros/delete/{{$libro->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>


@endsection