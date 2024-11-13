<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QuizQuestion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizOption>
 */
class QuizOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\QuizOption::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'option' => $this->faker->sentence,
            'is_correct' => false,
            'quiz_question_id' => QuizQuestion::factory(),
        ];
    }
}
