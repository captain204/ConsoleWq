<?php

namespace App\Services;

use App\Repos\QuizCategoryRepo;
use App\Models\QuizCategory;

class QuizCategoryService
{
    protected $quizCategoryRepo;

    public function __construct(QuizCategoryRepo $quizCategoryRepo)
    {
        $this->quizCategoryRepo = $quizCategoryRepo;
    }

    /**
     * Creates a new quiz category with the provided data.
     *
     * @param array $data The data to use when creating the new quiz category.
     * @return \App\Models\QuizCategory The newly created quiz category.
     */
    public function createQuizCategory(array $data): QuizCategory
    {
        return $this->quizCategoryRepo->createQuizCategory($data);
    }

    /**
     * Retrieves all quiz categories from the system.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizCategory[] An array of all quiz categories.
     */
    public function findAllQuizCategories(int $page = 1, int $perPage = 15)
    {
        return $this->quizCategoryRepo->findAllQuizCategories($page, $perPage);
    }

    /**
     * Finds a quiz category by its ID.
     *
     * @param int $id The ID of the quiz category to find.
     * @return \App\Models\QuizCategory|null The found quiz category, or null if not found.
     */
    public function findQuizCategoryById(int $id): ?QuizCategory
    {
        return $this->quizCategoryRepo->findQuizCategoryById($id);
    }

    /**
     * Updates an existing quiz category with the provided data.
     *
     * @param array $data The updated data for the quiz category.
     * @param int $id The ID of the quiz category to update.
     * @return \App\Models\QuizCategory|null The updated quiz category, or null if not found.
     */
    public function updateQuizCategory(array $data, int $id): ?QuizCategory
    {
        return $this->quizCategoryRepo->updateQuizCategory($data, $id);
    }

    /**
     * Deletes a quiz category by its ID.
     *
     * @param int $id The ID of the quiz category to delete.
     * @return bool True if the quiz category was deleted, false otherwise.
     */
    public function deleteQuizCategory(int $id): bool
    {
        return $this->quizCategoryRepo->deleteQuizCategory($id);
    }
}
