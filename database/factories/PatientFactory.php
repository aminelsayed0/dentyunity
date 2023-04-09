<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'name'=>fake()->name(),
            'address'=>fake()->streetAddress(),
            'age'=>fake()->numberBetween(18,90),
            'phone'=>fake()->phoneNumber(),
            'doctor_id'=>fake()->randomElement($doctor_ids)
        ];
    }
}
