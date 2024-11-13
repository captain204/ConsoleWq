<?php

namespace App\Services;

use App\Repos\QuizSubcategoryRepo;
use App\Models\QuizSubcategory;

class QuizSubCategoryService
{
    protected $quizSubcategoryRepo;

    public function __construct(QuizSubcategoryRepo $quizSubcategoryRepo)
    {
        $this->quizSubcategoryRepo = $quizSubcategoryRepo;
    }

    /**
     * Creates a new quiz subcategory with the provided data.
     *
     * @param array $data The data to use when creating the new quiz subcategory.
     * @return \App\Models\QuizSubcategory The newly created quiz subcategory.
     */
    public function createQuizSubcategory(array $data): QuizSubcategory
    {
        return $this->quizSubcategoryRepo->createQuizSubcategory($data);
    }

    /**
     * Retrieves all quiz subcategories.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\QuizSubcategory[] An array of all quiz subcategories.
     */
    public function findAllQuizSubcategories(int $page = 1, int $perPage = 15, int $categoryId)
    {
        return $this->quizSubcategoryRepo->findAllQuizSubcategories($page, $perPage, $categoryId);
    }

    /**
     * Finds a quiz subcategory by its ID.
     *
     * @param int $id The ID of the quiz subcategory to find.
     * @return \App\Models\QuizSubcategory|null The found quiz subcategory, or null if not found.
     */
    public function findQuizSubcategoryById(int $id): ?QuizSubcategory
    {
        return $this->quizSubcategoryRepo->findQuizSubcategoryById($id);
    }

    /**
     * Updates an existing quiz subcategory with the provided data.
     *
     * @param array $data The updated data for the quiz subcategory.
     * @param int $id The ID of the quiz subcategory to update.
     * @return \App\Models\QuizSubcategory|null The updated quiz subcategory, or null if not found.
     */
    public function updateQuizSubcategory(array $data, int $id): ?QuizSubcategory
    {
        return $this->quizSubcategoryRepo->updateQuizSubcategory($data, $id);
    }

    /**
     * Deletes a quiz subcategory by its ID.
     *
     * @param int $id The ID of the quiz subcategory to delete.
     * @return bool True if the quiz subcategory was deleted, false otherwise.
     */
    public function deleteQuizSubcategory(int $id): bool
    {
        return $this->quizSubcategoryRepo->deleteQuizSubcategory($id);
    }
}
