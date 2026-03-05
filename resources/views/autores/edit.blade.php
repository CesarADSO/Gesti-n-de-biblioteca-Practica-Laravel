@extends('layouts.app')

@section('content')
<h1>Formulario de actualización</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/autores/update/{{ $autor->id }}" method="POST">
    <!-- SINTAXIS DE SEGURIDAD -->
    @csrf
    <!-- ENMASCARAMOS EL METODO PUT -->
    @method('PUT')
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombres</label>
            <input type="text" name="nombres" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese los nombres del autor" value="{{ $autor->nombres }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" placeholder="Ingrese los apellidos del autor" value="{{ $autor->apellidos }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" placeholder="Ingrese la nacionalidad del autor" value="{{ $autor->nacionalidad }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Ingrese la nacionalidad del autor" value="{{ $autor->fecha_nacimiento }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Premios ganados</label>
            <input type="number" name="premios_ganados" class="form-control" value="{{ $autor->premios_ganados }}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Biografía breve</label>
            <textarea name="biografia_breve" id="" placeholder="ingrese una biografía breve del autor" class="form-control">{{ $autor->biografia_breve }}</textarea>
        </div>
    </div>

    <button type="subtmit" class="btn btn-dark">Actualizar autor</button>
</form>
@endsection