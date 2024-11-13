<?php

namespace Database\Seeders;

use App\Models\QuizOption;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Call the QuizCategorySeeder if not already called
        // $this->call(QuizCategorySeeder::class);

        // // Call the QuizSubcategorySeeder if not already called
        // $this->call(QuizSubcategorySeeder::class);

        // // Call the QuizQuestionSeeder
        // $this->call(QuizQuestionSeeder::class);

        // // Call the QuizOptionSeeder
        $this->call(QuizOptionSeeder::class);
    }
}
