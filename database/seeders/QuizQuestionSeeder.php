<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\QuizQuestion;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Optional: Clear the table before seeding
        Schema::disableForeignKeyConstraints();
        DB::table('quiz_questions')->truncate();
        Schema::enableForeignKeyConstraints();

        // Seed with 50 random quiz questions
        QuizQuestion::factory(5000)->create();
    }
}
