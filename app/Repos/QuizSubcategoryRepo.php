<?php

namespace App\Repos;

use App\Models\QuizSubcategory;

class QuizSubcategoryRepo
{
    protected $quizSubcategory;

    public function __construct(QuizSubcategory $quizSubcategory)
    {
        $this->quizSubcategory = $quizSubcategory;
    }

    /**
     * Creates a new quiz subcategory with the provided data.
     *
     * @param array $data The data to use when creating the new quiz subcategory.
     * @return \App\Models\QuizSubcategory The newly created quiz subcategory.
     */
    public function createQuizSubcategory(array $data): QuizSubcategory
    {
        return $this->quizSubcategory->create($data);
    }

    /**
     * Get paginated subcategories of a specific subcategory.
     *
     * @param int $page
     * @param int $perPage
     * @param int $parentId
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function findAllQuizSubcategories(int $page = 1, int $perPage = 15, int $categoryId)
    {
        // Query subcategories by the parent ID and apply pagination
        return $this->quizSubcategory->where('quiz_category_id', $categoryId)
            ->paginate($perPage, ['*'], 'page', $page);
    }


    /**
     * Finds a quiz subcategory by its ID.
     *
     * @param int $id The ID of the quiz subcategory to find.
     * @return \App\Models\QuizSubcategory|null The found quiz subcategory, or null if not found.
     */
    public function findQuizSubcategoryById(int $id): ?QuizSubcategory
    {
        return $this->quizSubcategory->with('questions')->find($id);
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
        $quizSubcategory = $this->findQuizSubcategoryById($id);
        if ($quizSubcategory) {
            $quizSubcategory->update($data);
            return $quizSubcategory;
        }
        return null;
    }

    /**
     * Deletes a quiz subcategory by its ID.
     *
     * @param int $id The ID of the quiz subcategory to delete.
     * @return bool True if the quiz subcategory was deleted, false otherwise.
     */
    public function deleteQuizSubcategory(int $id): bool
    {
        $quizSubcategory = $this->findQuizSubcategoryById($id);
        if ($quizSubcategory) {
            return $quizSubcategory->delete();
        }
        return false;
    }
}
