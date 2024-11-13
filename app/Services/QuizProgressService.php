<?php

namespace App\Services;

use App\Repos\QuizProgressRepo;
use App\Models\QuizProgress;

class QuizProgressService
{
    protected $quizProgressRepo;

    public function __construct(QuizProgressRepo $quizProgressRepo)
    {
        $this->quizProgressRepo = $quizProgressRepo;
    }

    /**
     * Creates a new quiz progress record with the provided data.
     *
     * @param array $data The data to use when creating the new quiz progress record.
     * @return \App\Models\QuizProgress The newly created quiz progress record.
     */
    public function createQuizProgress(array $data): QuizProgress
    {
        return $this->quizProgressRepo->createQuizProgress($data);
    }

    /**
     * Retrieves quiz progress records for a specific user.
     *
     * @param int $userId The ID of the user.
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizProgress[] An array of all quiz progress records for the user.
     */
    public function findQuizProgressByUserId(int $userId)
    {
        return $this->quizProgressRepo->findQuizProgressByUserId($userId);
    }

    /**
     * Finds a quiz progress record by its ID.
     *
     * @param int $id The ID of the quiz progress record to find.
     * @return \App\Models\QuizProgress|null The found quiz progress record, or null if not found.
     */
    public function findQuizProgressById(int $id): ?QuizProgress
    {
        return $this->quizProgressRepo->findQuizProgressById($id);
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
        return $this->quizProgressRepo->updateQuizProgress($data, $id);
    }

    /**
     * Deletes a quiz progress record by its ID.
     *
     * @param int $id The ID of the quiz progress record to delete.
     * @return bool True if the quiz progress record was deleted, false otherwise.
     */
    public function deleteQuizProgress(int $id): bool
    {
        return $this->quizProgressRepo->deleteQuizProgress($id);
    }
}
