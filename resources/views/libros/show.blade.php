@extends('layouts.app')

@section('content')

<h1 style="text-align: center;" class="py-4">Detalle del libro</h1>

<div class="row">
    <div class="col-md-6">
        <img src="https://images.cdn3.buscalibre.com/fit-in/360x360/61/8d/618d227e8967274cd9589a549adff52d.jpg" alt="Libro">
    </div>
    <div class="col-md-6">
        <h2><strong>{{ $libro->titulo }}</strong></h2>
        <p><strong>Autor:</strong> {{ $libro->autor->nombres }} {{ $libro->autor->apellidos }}</p>
        <p><strong>Estado físico:</strong> {{$libro->estado_fisico}}</p>
        <p><strong>Fecha de publicación:</strong> {{$libro->fecha_publicacion}}</p>
        <p><strong>Editorial:</strong> {{$libro->editorial}}</p>
        <p><strong>Género:</strong> {{$libro->genero}}</p>
        <p><strong>Número de páginas:</strong> {{$libro->numero_paginas}}</p>
        <p><strong>Idioma:</strong> {{$libro->idioma}}</p>
    </div>
</div>

@endsection