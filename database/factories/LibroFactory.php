<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'estado_fisico' => $this->faker->randomElement(['Bueno', 'Regular', 'Malo']),
            'fecha_publicacion' => $this->faker->date(),
            'editorial' => $this->faker->company(),
            'genero' => $this->faker->word(),
            'numero_paginas' => $this->faker->numberBetween(),
            'idioma' => $this->faker->languageCode(),
            // Esto crea un autor relacionado con el libro
            'id_autor' => Autor::factory(),

        ];
    }
}
