<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuizLevel;

class QuizCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'instruction',
        'paticipants',
        'status',
    ];



    /**
     * Get the subcategories associated with the quiz category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories()
    {
        return $this->hasMany(QuizSubcategory::class);
    }
}
