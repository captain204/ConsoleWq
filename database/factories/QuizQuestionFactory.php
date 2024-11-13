<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QuizSubcategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizQuestion>
 */
class QuizQuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\QuizQuestion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence,
            'media_url' => $this->faker->optional()->imageUrl(),
            'point' => $this->faker->randomFloat(2, 1, 10),
            'difficulty_level' => $this->faker->numberBetween(1, 5),
            'quiz_subcategory_id' => $this->faker->numberBetween(1, 100), // Associate with a random QuizSubcategory
        ];
    }
}
