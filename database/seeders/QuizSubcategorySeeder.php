<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\QuizSubcategory;

class QuizSubcategorySeeder extends Seeder
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
        DB::table('quiz_subcategories')->truncate();
        Schema::enableForeignKeyConstraints();

        // Seed with 50 random quiz subcategories
        QuizSubcategory::factory(10_000)->create();
    }
}
