<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\QuizSubCategoryService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Provides an API for managing quiz subcategories.
 *
 * This controller handles the CRUD operations for quiz subcategories, including:
 * - Listing all available quiz subcategories
 * - Retrieving details of a specific quiz subcategory
 *
 * The controller relies on the `QuizSubCategoryService` to perform the underlying business logic.
 */
class QuizSubCategoryController extends Controller
{
    protected QuizSubCategoryService $quizSubCategoryService;

    public function __construct(QuizSubCategoryService $quizSubCategoryService)
    {
        $this->quizSubCategoryService = $quizSubCategoryService;
    }

    /**
     * Display a listing of the quiz subcategories.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubcategories(Request $request, int $id)
    {
        $page = (int) $request->input('page', 1);
        $perPage = (int) $request->input('size', 15);

        // Basic validation for page and perPage values
        if ($page < 1) {
            $page = 1;
        }
        if ($perPage < 1) {
            $perPage = 15;
        }

        $quizCategories = $this->quizSubCategoryService->findAllQuizSubcategories($page, $perPage, $id);
        return response()->json($quizCategories);
    }

    /**
     * Display the specified quiz subcategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubcategoryById(int $id)
    {
        $quizCategory = $this->quizSubCategoryService->findQuizSubcategoryById($id);

        if (!$quizCategory) {
            return response()->json(['error' => 'Quiz subcategory not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($quizCategory);
    }
}
