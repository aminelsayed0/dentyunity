<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToolForm>
 */
class ToolFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $doctor_ids = Doctor::pluck('id')->toArray();
        return [
            'name'=>fake()->sentence(1),
            'price'=>fake()->numberBetween(100,5000),
            'description'=>fake()->paragraph(8),
            'image'=>fake()->imageUrl(),
            'doctor_id'=>fake()->randomElement($doctor_ids)
        ];
    }
}
