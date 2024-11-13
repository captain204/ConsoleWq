<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quiz_progress', function (Blueprint $table) {
            $table->id();
            $table->integer('questions_completed')->default(0);
            $table->integer('questions_total')->default(0);
            $table->enum('status', ['inprogress', 'completed', 'failed'])->default('inprogress');
            
            
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('category_id')->references('id')->on('quiz_categories');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_progress');
    }
};
