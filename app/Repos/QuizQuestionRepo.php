<?php

namespace App\Repos;

use App\Models\QuizQuestion;
use Illuminate\Support\Facades\DB;


class QuizQuestionRepo
{
    protected $quizQuestion;

    public function __construct(QuizQuestion $quizQuestion)
    {
        $this->quizQuestion = $quizQuestion;
    }

    /**
     * Create a new quiz question.
     *
     * @param array $data
     * @return QuizQuestion
     */
    public function create(array $data): QuizQuestion
    {
        return $this->quizQuestion->create($data);
    }


    /**
     * Create multiple quiz questions.
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function createBulk(array $data)
    {
        // Use transaction for atomicity
        return DB::transaction(function () use ($data) {
            // Insert multiple records into the database
            return QuizQuestion::insert($data);
        });
    }


    /**
     * Find a quiz question by ID.
     *
     * @param int $id
     * @return QuizQuestion|null
     */
    public function find(int $id): ?QuizQuestion
    {
        return $this->quizQuestion->with('options')->find($id);
    }

    /**
     * Update a quiz question by ID.
     *
     * @param array $data
     * @param int $id
     * @return QuizQuestion|null
     */
    public function update(array $data, int $id): ?QuizQuestion
    {
        $quizQuestion = $this->quizQuestion->find($id);
        if ($quizQuestion) {
            $quizQuestion->update($data);
            return $quizQuestion;
        }
        return null;
    }

    /**
     * Delete a quiz question by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $quizQuestion = $this->quizQuestion->find($id);
        if ($quizQuestion) {
            return $quizQuestion->delete();
        }
        return false;
    }

    /**
     * Delete multiple quiz questions by IDs.
     *
     * @param array $ids
     * @return int The number of rows deleted
     */
    public function deleteBulk(array $ids)
    {
        // Use transaction for atomicity
        return DB::transaction(function () use ($ids) {
            // Delete quiz questions where ID is in the $ids array
            return QuizQuestion::whereIn('id', $ids)->delete();
        });
    }


    /**
     * Get paginated quiz questions.
     *
     * @param int $page
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all(int $page = 1, int $perPage = 15, int $subcategoryId, int $difficultyLevel)
    {
        // Set the page number
        $page = max(1, $page);

        // Use the `paginate` method to get paginated results
        return $this->quizQuestion->where('quiz_subcategory_id', $subcategoryId)->where('difficulty_level',  $difficultyLevel)->paginate($perPage, ['*'], 'page', $page);
    }
}
