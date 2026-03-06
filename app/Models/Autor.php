<?php

namespace App\Models;

// ESTA ES LA LÍNEA QUE FALTA:
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    use HasFactory;
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
