@extends('layouts.app')

@section('content')

<h1>Registrar libro</h1>
<form action="/libros" method="POST">
    <!-- SINTAXIS DE SEGURIDAD -->
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el título del libro">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Estado físico</label>
            <select name="estado_fisico" id="" class="form-control">
                <option value="">Seleccione un estado físico</option>
                <option value="Nuevo">Nuevo</option>
                <option value="Decente">Decente</option>
                <option value="Deteriorado">Deteriorado</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Fecha de publicación</label>
            <input type="date" name="fecha_publicacion" class="form-control" placeholder="Ingrese la fecha de publicación del libro">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Editorial</label>
            <input type="text" name="editorial" class="form-control" placeholder="Ingrese la editorial que publicó el libro">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Género</label>
            <input type="text" name="genero" class="form-control" placeholder="Ej: Terror">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Número de páginas</label>
            <input type="number" class="form-control" name="numero_paginas" placeholder="Ej: 200">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Idioma</label>
            <input type="text" class="form-control" name="idioma" placeholder="Ingrese el idioma en el cual está escrito el libro">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Autor</label>
            <select name="id_autor" id="" class="form-control">
                <!-- PINTAMOS LOS AUTORES QUE VIENEN DE LA BASE DE DATOS -->
                 <option value="">Seleccione un autor</option>
                @foreach($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombres }} {{ $autor->apellidos }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-dark">Registrar libro</button>

</form>


@endsection