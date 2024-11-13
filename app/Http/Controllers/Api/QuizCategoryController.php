<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\QuizCategoryService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Provides an API for managing quiz categories.
 *
 * This controller handles the CRUD operations for quiz categories, including:
 * - Listing all available quiz categories
 * - Creating a new quiz category
 * - Retrieving details of a specific quiz category
 * - Updating an existing quiz category
 * - Deleting a quiz category
 *
 * The controller relies on the `QuizCategoryService` to perform the underlying business logic.
 */
class QuizCategoryController extends Controller
{
    protected $quizCategoryService;

    public function __construct(QuizCategoryService $quizCategoryService)
    {
        $this->quizCategoryService = $quizCategoryService;
    }

    /**
     * Display a listing of the quiz categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('size', 15);

        if ($page < 1) {
            $page = 1;
        }
        if ($perPage < 1) {
            $perPage = 15;
        }

        $quizCategories = $this->quizCategoryService->findAllQuizCategories($page, $perPage);
        return response()->json($quizCategories);
    }

    /**
     * Display the specified quiz category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCategoryById($id)
    {
        $quizCategory = $this->quizCategoryService->findQuizCategoryById($id);

        if (!$quizCategory) {
            return response()->json(['error' => 'Quiz category not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($quizCategory);
    }
}
