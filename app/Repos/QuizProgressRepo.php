<?php

namespace App\Repos;

use App\Models\QuizProgress;

class QuizProgressRepo
{
    protected $quizProgress;

    public function __construct(QuizProgress $quizProgress)
    {
        $this->quizProgress = $quizProgress;
    }

    /**
     * Creates a new quiz progress record with the provided data.
     *
     * @param array $data The data to use when creating the new quiz progress record.
     * @return \App\Models\QuizProgress The newly created quiz progress record.
     */
    public function createQuizProgress(array $data): QuizProgress
    {
        return $this->quizProgress->create($data);
    }

    /**
     * Retrieves quiz progress records for a specific user.
     *
     * @param int $userId The ID of the user.
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizProgress[] An array of all quiz progress records for the user.
     */
    public function findQuizProgressByUserId(int $userId)
    {
        return $this->quizProgress->where('user_id', $userId)->get();
    }

    /**
     * Finds a quiz progress record by its ID.
     *
     * @param int $id The ID of the quiz progress record to find.
     * @return \App\Models\QuizProgress|null The found quiz progress record, or null if not found.
     */
    public function findQuizProgressById(int $id): ?QuizProgress
    {
        return $this->quizProgress->find($id);
    }

    /**
     * Updates an existing quiz progress record with the provided data.
     *
     * @param array $data The updated data for the quiz progress record.
     * @param int $id The ID of the quiz progress record to update.
     * @return \App\Models\QuizProgress|null The updated quiz progress record, or null if not found.
     */
    public function updateQuizProgress(array $data, int $id): ?QuizProgress
    {
        $quizProgress = $this->findQuizProgressById($id);
        if ($quizProgress) {
            $quizProgress->update($data);
            return $quizProgress;
        }
        return null;
    }

    /**
     * Deletes a quiz progress record by its ID.
     *
     * @param int $id The ID of the quiz progress record to delete.
     * @return bool True if the quiz progress record was deleted, false otherwise.
     */
    public function deleteQuizProgress(int $id): bool
    {
        $quizProgress = $this->findQuizProgressById($id);
        if ($quizProgress) {
            return $quizProgress->delete();
        }
        return false;
    }
}
