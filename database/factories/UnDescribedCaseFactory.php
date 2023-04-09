<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Symfony\Component\Console\Question\Question;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnDescribedCase>
 */
class UnDescribedCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patient_ids = Patient::pluck('id')->toArray();
        $question_ids = Questions::pluck('id')->toArray();
        return [
            'image'=>fake()->imageUrl(),
            'description'=>fake()->paragraph(2),
            'patient_id'=>fake()->randomElement($patient_ids),
            'question_id'=>fake()->randomElement($question_ids)
        ];

    }
}
