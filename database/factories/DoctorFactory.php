<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username'=>fake()->userName(),
            'FirstName'=>fake()->firstName(),
            'LastName'=>fake()->lastName(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=> fake()->password(),
            'grade'=> fake()->numberBetween(3,6)

        ];
    }
}
