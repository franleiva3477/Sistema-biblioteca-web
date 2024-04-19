<?php

namespace Database\Factories;
use App\Models\persona;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\persona>
 */
class personaFactory extends Factory
{
    /**
     * Define the model's default state.
     
     *
     * @return array<string, mixed>
     * 
     */protected $model=persona::class;

    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'direccion'=>$this->faker->address()
        ];
    }
}
