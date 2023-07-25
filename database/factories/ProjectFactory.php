<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['Io', 'Marco', 'Antonio', 'Pippo', 'Luca', 'Gianni', 'Franco']),
            'title' => fake()->randomElement(['Boolzapp', 'Boolflix', 'Boolmovie', 'Boolauth', 'Boolcip', 'BoolBool', 'Viaggio a Londra']),
            'collaborators' => fake()->name(),
            'date_finished' => fake()->dateTime(),
        ];
    }
}
