<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuizCategory;
use App\Models\QuizLevel;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'media_url',
        'point',
        'difficulty_level',
        'quiz_subcategory_id',
    ];


    /**
     * Get the subcategory that the quiz question belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategory()
    {
        return $this->belongsTo(QuizSubCategory::class, 'quiz_subcategory_id');
    }

    /**
     * Get the quiz options associated with this quiz question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(QuizOption::class);
    }
}
