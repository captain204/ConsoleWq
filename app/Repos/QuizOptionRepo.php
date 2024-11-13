<?php

namespace App\Repos;

use App\Models\QuizOption;

class QuizOptionRepo
{
    protected $quizOption;

    public function __construct(QuizOption $quizOption)
    {
        $this->quizOption = $quizOption;
    }

    /**
     * Creates a new quiz option with the provided data.
     *
     * @param array $data The data to use when creating the new quiz option.
     * @return \App\Models\QuizOption The newly created quiz option.
     */
    public function createQuizOption(array $data): QuizOption
    {
        return $this->quizOption->create($data);
    }


    public function findAllQuizOptions()
    {
        return $this->quizOption->all();
    }

    /**
     * Retrieves all quiz options for a specific quiz question.
     *
     * @param int $quizQuestionId The ID of the quiz question.
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizOption[] An array of all quiz options for the quiz question.
     */
    public function findQuizOptionsByQuestionId(int $quizQuestionId)
    {
        return $this->quizOption->where('quiz_question_id', $quizQuestionId)->get();
    }

    /**
     * Finds a quiz option by its ID.
     *
     * @param int $id The ID of the quiz option to find.
     * @return \App\Models\QuizOption|null The found quiz option, or null if not found.
     */
    public function findQuizOptionById(int $id): ?QuizOption
    {
        return $this->quizOption->find($id);
    }

    /**
     * Updates an existing quiz option with the provided data.
     *
     * @param array $data The updated data for the quiz option.
     * @param int $id The ID of the quiz option to update.
     * @return \App\Models\QuizOption|null The updated quiz option, or null if not found.
     */
    public function updateQuizOption(array $data, int $id): ?QuizOption
    {
        $quizOption = $this->findQuizOptionById($id);
        if ($quizOption) {
            $quizOption->update($data);
            return $quizOption;
        }
        return null;
    }

    /**
     * Deletes a quiz option by its ID.
     *
     * @param int $id The ID of the quiz option to delete.
     * @return bool True if the quiz option was deleted, false otherwise.
     */
    public function deleteQuizOption(int $id): bool
    {
        $quizOption = $this->findQuizOptionById($id);
        if ($quizOption) {
            return $quizOption->delete();
        }
        return false;
    }
}
