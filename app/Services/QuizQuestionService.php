<?php

namespace App\Services;

use App\Repos\QuizQuestionRepo;
use App\Models\QuizQuestion;

class QuizQuestionService
{
    protected $quizQuestionRepo;

    public function __construct(QuizQuestionRepo $quizQuestionRepo)
    {
        $this->quizQuestionRepo = $quizQuestionRepo;
    }

    /**
     * Creates a new quiz question with the provided data.
     *
     * @param array $data The data to use when creating the new quiz question.
     * @return \App\Models\QuizQuestion The newly created quiz question.
     */
    public function createQuizQuestion(array $data): QuizQuestion
    {
        return $this->quizQuestionRepo->create($data);
    }

    /**
     * Creates multiple new quiz questions with the provided data.
     *
     * @param array $data The data to use when creating the new quiz questions.
     * @return \App\Models\QuizQuestion[] An array of the newly created quiz questions.
     */
    public function createBulkQuizQuestions(array $data)
    {
        return $this->quizQuestionRepo->createBulk($data);
    }

    /**
     * Retrieves all quiz questions.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizQuestion[] An array of all quiz questions.
     */
    public function getAllQuizQuestions(int $page = 1, int $perPage = 15, int $subcategoryId, int $difficultyLevel)
    {
        return $this->quizQuestionRepo->all($page, $perPage, $subcategoryId, $difficultyLevel);
    }

    /**
     * Finds a quiz question by its ID.
     *
     * @param int $id The ID of the quiz question to find.
     * @return \App\Models\QuizQuestion|null The found quiz question, or null if not found.
     */
    public function findQuizQuestionById(int $id): ?QuizQuestion
    {
        return $this->quizQuestionRepo->find($id);
    }

    /**
     * Updates an existing quiz question with the provided data.
     *
     * @param array $data The updated data for the quiz question.
     * @param int $id The ID of the quiz question to update.
     * @return \App\Models\QuizQuestion|null The updated quiz question, or null if not found.
     */
    public function updateQuizQuestion(array $data, int $id): ?QuizQuestion
    {
        return $this->quizQuestionRepo->update($data, $id);
    }

    /**
     * Deletes a quiz question by its ID.
     *
     * @param int $id The ID of the quiz question to delete.
     * @return bool True if the quiz question was deleted, false otherwise.
     */
    public function deleteQuizQuestion(int $id): bool
    {
        return $this->quizQuestionRepo->delete($id);
    }


    /**
     * Deletes multiple quiz questions by their IDs.
     *
     * @param array $ids The IDs of the quiz questions to delete.
     * @return int The number of quiz questions deleted.
     */
    public function deleteMultipleQuizQuestions(array $ids): int
    {
        return $this->quizQuestionRepo->deleteBulk($ids);
    }
}
