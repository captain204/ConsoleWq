<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuizCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Optional: Reset the table if needed
        Schema::disableForeignKeyConstraints();
        DB::table('quiz_categories')->truncate();
        Schema::enableForeignKeyConstraints();

        // Seed with 50 random quiz categories
        \App\Models\QuizCategory::factory(1500)->create();
    }
}
