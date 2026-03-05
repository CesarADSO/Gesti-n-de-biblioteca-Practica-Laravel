<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'nacionalidad',
        'fecha_nacimiento',
        'biografia_breve',
        'premios_ganados'
    ];

    // Relación: un autor tiene MUCHOS libros
    public function libros(){
        return $this->hasMany(Libro::class, 'id_autor');
    }
}
