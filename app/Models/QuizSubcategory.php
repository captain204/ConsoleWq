<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSubcategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'logo',
        'instruction',
        'paticipants',
        'status',
        'quiz_category_id',
    ];

    // Define the relationship with the QuizCategory model
    /**
     * Get the quiz category that this subcategory belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(QuizCategory::class);
    }

    /**
     * Get the quiz questions that belong to this subcategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }
}
