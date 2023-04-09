<?php

namespace Database\Factories;

use App\Models\Patient;
use Dotenv\Store\File\Paths;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DescribedCase>
 */
class DescribedCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patient_ids = Patient::pluck('id')->toArray();
        return [
           'image'=>fake()->imageUrl(),
           'diagnosis'=>fake()->paragraph(3),
           'patient_id'=>fake()->randomElement($patient_ids)
        ];
    }
}
