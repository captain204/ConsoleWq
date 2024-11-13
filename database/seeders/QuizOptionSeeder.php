<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuizQuestion;
use App\Models\QuizOption;

class QuizOptionSeeder extends Seeder
{
    public function run()
    {
        // Create 10 quiz questions
        QuizQuestion::factory()
            ->count(700)
            ->create()
            ->each(function ($question) {
                // Create between 1 to 4 options for each question
                $options = QuizOption::factory()
                    ->count(rand(2, 4)) // Ensure at least 2 options to have one correct
                    ->make(['quiz_question_id' => $question->id]);

                // Randomly select one option to be correct
                $correctOptionIndex = rand(0, count($options) - 1);

                foreach ($options as $index => $option) {
                    if ($index === $correctOptionIndex) {
                        $option->is_correct = true;
                    } else {
                        $option->is_correct = false;
                    }
                    $option->save();
                }
            });
    }
}
