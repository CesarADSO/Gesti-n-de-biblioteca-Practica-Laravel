<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Autor;
// use App\Models\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'nacionalidad'=> $this->faker->country(),
            'fecha_nacimiento' => $this->faker->date(),
            'biografia_breve' => $this->faker->paragraph(),
            'premios_ganados' => $this->faker->numberBetween(0, 10),




        ];
    }
}
