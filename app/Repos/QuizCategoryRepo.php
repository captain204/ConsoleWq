<?php

namespace App\Repos;

use App\Models\QuizCategory;

class QuizCategoryRepo
{
    protected $quizCategory;

    public function __construct(QuizCategory $quizCategory)
    {
        $this->quizCategory = $quizCategory;
    }

    /**
     * Creates a new quiz category with the provided data.
     *
     * @param array $data The data to use when creating the new quiz category.
     * @return \App\Models\QuizCategory The newly created quiz category.
     */
    public function createQuizCategory(array $data): QuizCategory
    {
        return $this->quizCategory->create($data);
    }

    /**
     * Get paginated quiz categories.
     *
     * @param int $page
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function findAllQuizCategories(int $page = 1, int $perPage = 15)
    {
        // Ensure the page number is at least 1
        $page = max(1, $page);

        // Use the paginate method to get paginated results
        return $this->quizCategory->paginate($perPage, ['*'], 'page', $page);
    }


    /**
     * Finds a quiz category by its ID.
     *
     * @param int $id The ID of the quiz category to find.
     * @return \App\Models\QuizCategory|null The found quiz category, or null if not found.
     */
    public function findQuizCategoryById(int $id): ?QuizCategory
    {
        // Eager load the 'subcategories' relationship
        return $this->quizCategory->with('subcategories')->find($id);
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
        $quizCategory = $this->findQuizCategoryById($id);
        if ($quizCategory) {
            $quizCategory->update($data);
            return $quizCategory;
        }
        return null;
    }

    /**
     * Deletes a quiz category by its ID.
     *
     * @param int $id The ID of the quiz category to delete.
     * @return bool True if the quiz category was deleted, false otherwise.
     */
    public function deleteQuizCategory(int $id): bool
    {
        $quizCategory = $this->findQuizCategoryById($id);
        if ($quizCategory) {
            return $quizCategory->delete();
        }
        return false;
    }
}
