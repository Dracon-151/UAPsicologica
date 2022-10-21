<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => now(),
            'name' => fake()->name(),
            'principal' => fake()->name(),
            'teacher' => fake()->name(),
            'school' => fake()->name(),
            'zone' => '123',
            'location' => 'La Paz',
            'municipality' => 'La Paz',
            'time' => 'Matutino',
            'zone' => '123',
            'grade' => 2,
            'group' => 'A',
            'attention_type' => 'Taller',
            'observations' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',

        ];
    }
}
