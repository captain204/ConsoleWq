<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QuizSubCategoryService;

class QuizSubcategoryController extends Controller
{
    protected $quizSubCategoryService;

    public function __construct(QuizSubCategoryService $quizSubCategoryService)
    {
        $this->quizSubCategoryService = $quizSubCategoryService;
    }

    /**
     * Display a listing of the quiz categories.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $quizCategories = $this->quizSubCategoryService->findallQuizSubCategories();
        return view('pages.quiz.list-category', compact('quizCategories'));
    }

    /**
     * Show the form for creating a new quiz category.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('quiz-categories.create');
    }

    /**
     * Store a newly created quiz category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            // Add more validation rules as per your requirements
        ]);

        $this->quizSubCategoryService->createQuizSubcategory($validatedData);

        return redirect()->route('quiz-categories.index')->with('success', 'Quiz category created successfully.');
    }

    /**
     * Display the specified quiz category.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $quizCategory = $this->quizSubCategoryService->findQuizSubcategoryById($id);

        if (!$quizCategory) {
            abort(404, 'Quiz category not found.');
        }

        return view('quiz-categories.show', compact('quizCategory'));
    }

    /**
     * Show the form for editing the specified quiz category.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $quizCategory = $this->quizSubCategoryService->findQuizSubcategoryById($id);

        if (!$quizCategory) {
            abort(404, 'Quiz category not found.');
        }

        return view('quiz-categories.edit', compact('quizCategory'));
    }

    /**
     * Update the specified quiz category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string',
            // Add more validation rules as per your requirements
        ]);

        $this->quizSubCategoryService->updateQuizSubcategory($validatedData, $id);

        return redirect()->route('quiz-categories.index')->with('success', 'Quiz category updated successfully.');
    }

    /**
     * Remove the specified quiz category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->quizSubCategoryService->deleteQuizSubcategory($id);

        return redirect()->route('quiz-categories.index')->with('success', 'Quiz category deleted successfully.');
    }
}
