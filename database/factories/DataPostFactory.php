<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\data_post>
 */
class DataPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' =>Employer::factory(),
            //'arabic_title' => fake()->text,
            'english_title' => fake()->text,
            'league_update' => fake()->randomElement(['Yearly','Monthly','Daily','Half Yearly']),
            'status' => fake()->randomElement(['Published', 'Unpublished']),

        ];
    }
}
