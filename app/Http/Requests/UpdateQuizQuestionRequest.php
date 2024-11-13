<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuizQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question' => 'required|string',
            'media_url' => 'nullable|url',
            'point' => 'required|integer|min:1',
            'difficulty_level' => 'required|in:easy,medium,hard',
            'quiz_subcategory_id' => 'required|exists:quiz_subcategories,id',
        ];
    }
}
