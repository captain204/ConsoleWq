<?php

namespace App\Repos;

use App\Models\QuizAnswer;

class QuizAnswerRepo
{
    protected $quizAnswer;

    public function __construct(QuizAnswer $quizAnswer)
    {
        $this->quizAnswer = $quizAnswer;
    }

    /**
     * Creates a new quiz answer with the provided data.
     *
     * @param array $data The data to use when creating the new quiz answer.
     * @return \App\Models\QuizAnswer The newly created quiz answer.
     */
    public function createQuizAnswer(array $data): QuizAnswer
    {
        return $this->quizAnswer->create($data);
    }

    /**
     * Retrieves all quiz answers for a specific user.
     *
     * @param int $userId The ID of the user.
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizAnswer[] An array of all quiz answers for the user.
     */
    public function findQuizAnswersByUserId(int $userId)
    {
        return $this->quizAnswer->where('user_id', $userId)->get();
    }

    /**
     * Finds a quiz answer by its ID.
     *
     * @param int $id The ID of the quiz answer to find.
     * @return \App\Models\QuizAnswer|null The found quiz answer, or null if not found.
     */
    public function findQuizAnswerById(int $id): ?QuizAnswer
    {
        return $this->quizAnswer->find($id);
    }

    /**
     * Updates an existing quiz answer with the provided data.
     *
     * @param array $data The updated data for the quiz answer.
     * @param int $id The ID of the quiz answer to update.
     * @return \App\Models\QuizAnswer|null The updated quiz answer, or null if not found.
     */
    public function updateQuizAnswer(array $data, int $id): ?QuizAnswer
    {
        $quizAnswer = $this->findQuizAnswerById($id);
        if ($quizAnswer) {
            $quizAnswer->update($data);
            return $quizAnswer;
        }
        return null;
    }

    /**
     * Deletes a quiz answer by its ID.
     *
     * @param int $id The ID of the quiz answer to delete.
     * @return bool True if the quiz answer was deleted, false otherwise.
     */
    public function deleteQuizAnswer(int $id): bool
    {
        $quizAnswer = $this->findQuizAnswerById($id);
        if ($quizAnswer) {
            return $quizAnswer->delete();
        }
        return false;
    }
}
