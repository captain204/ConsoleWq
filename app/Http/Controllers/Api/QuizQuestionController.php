<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\QuizSubCategoryService;
use App\Services\QuizQuestionService;
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
class QuizQuestionController extends Controller
{
    protected QuizQuestionService $quizQuestionService;

    public function __construct(QuizQuestionService $quizQuestionService)
    {
        $this->quizQuestionService = $quizQuestionService;
    }

    /**
     * Display a listing of the quiz subcategories.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuizQuestions(Request $request, int $id)
    {
        $page = (int) $request->input('page', 1);
        $perPage = (int) $request->input('size', 15);
        $difficultyLevel = (int) $request->input('difficultyLevel', 1);

        // Basic validation for page and perPage values
        if ($page < 1) {
            $page = 1;
        }
        if ($perPage < 1) {
            $perPage = 15;
        }
        if ($difficultyLevel < 1) {
            $difficultyLevel = 1;
        }

        $quizCategories = $this->quizQuestionService->getAllQuizQuestions($page, $perPage, $id, $difficultyLevel);
        return response()->json($quizCategories);
    }

    /**
     * Display the specified quiz subcategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuizQuestionById(int $id)
    {
        $quizCategory = $this->quizQuestionService->findQuizQuestionById($id);

        if (!$quizCategory) {
            return response()->json(['error' => 'Quiz subcategory not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($quizCategory);
    }
}
