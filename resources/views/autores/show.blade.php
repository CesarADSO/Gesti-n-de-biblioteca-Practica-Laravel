@extends('layouts.app')

@section('content')

<h1 style="text-align: center;" class="py-4">Detalle del autor</h1>

<div class="row">
    <div class="col-md-6">
        <img src="https://www.biografiasyvidas.com/reportaje/garcia_marquez/fotos/garcia_marquez_420a.jpg" alt="">
    </div>
    <div class="col-md-6">
        <h2><strong>{{$autor->nombres}} {{$autor->apellidos}}</strong></h2>
        <p><strong>Nacionalidad:</strong> {{$autor->nacionalidad}}</p>
        <p><strong>Fecha de nacimiento:</strong> {{$autor->fecha_nacimiento}}</p>
        <p><strong>Biografía breve:</strong> {{$autor->biografia_breve}}</p>
        <p><strong>Premios ganados:</strong> {{$autor->premios_ganados}}</p>
    </div>
</div>

@endsection