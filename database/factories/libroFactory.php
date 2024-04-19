<?php

namespace Database\Factories;

use App\Models\persona;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\libro>
 */
class libroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo'=> $this->faker->title(),
            'autor'=>$this->faker->name(),
            'editorial'=>$this->faker->colorName(),
            'contenido'=>$this->faker->randomElement(['hojas','capitulos'])

        ];
    }
}
