<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Questions>
 */
class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Q1'=>fake()->numberBetween(0,1),
            'Q2'=>fake()->numberBetween(0,1),
            'Q3'=>fake()->numberBetween(0,1),
            'Q4'=>fake()->numberBetween(0,1),
            'Q5'=>fake()->numberBetween(0,1),
        ];
    }
}
