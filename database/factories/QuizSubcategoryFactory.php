<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QuizCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizSubcategory>
 */
class QuizSubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\QuizSubcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'logo' => $this->faker->imageUrl(),
            'instruction' => $this->faker->text(),
            'status' => $this->faker->randomElement(['active', 'draft', 'archived']),
            'quiz_category_id' => $this->faker->numberBetween(1, 300), // Associate with a random QuizCategory
            'paticipants' => $this->faker->numberBetween(0, 100),
        ];
    }
}
