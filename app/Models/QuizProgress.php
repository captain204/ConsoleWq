<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'questions_completed',
        'questions_total',
        'status',
        'category_id',
        'user_id',
    ];

    // Optional: Define relationships if necessary
    public function category()
    {
        return $this->belongsTo(QuizCategory::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
