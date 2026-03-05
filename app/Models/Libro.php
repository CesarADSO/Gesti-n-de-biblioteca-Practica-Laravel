<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'estado_fisico',
        'fecha_publicacion',
        'editorial',
        'genero',
        'numero_paginas',
        'idioma',
        'id_autor'
    ];

    // Relación: un libro pertenece a un autor
    public function autor() {
        return $this->belongsTo(Autor::class, 'id_autor');
    }
}
