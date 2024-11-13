<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quiz_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('instruction');

            $table->enum('status', ['active', 'draft', 'archived'])->default('draft');
            $table->unsignedBigInteger('quiz_category_id');
            $table->integer('paticipants')->default(0);
            $table->foreign('quiz_category_id')->references('id')->on('quiz_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_subcategories');
    }
};
