<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizCategory>
 */
class QuizCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\QuizCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'logo' => $this->faker->imageUrl,
            'instruction' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['active', 'draft', 'archived']),
            'paticipants' => $this->faker->numberBetween(0, 100),
        ];
    }
}
