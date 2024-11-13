<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\QuizCategoryController;
use App\Http\Controllers\Api\QuizSubCategoryController;
use App\Http\Controllers\Api\QuizQuestionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/resend/opt', [AuthController::class, 'register']);
Route::post('/reset/password', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/me', [AuthController::class, 'me']);



// quiz routes
Route::get('/quiz/categories', [QuizCategoryController::class, 'getCategories']);
Route::get('/quiz/categories/{id}', [QuizCategoryController::class, 'getCategoryById']);
Route::get('/quiz/categories/{id}/subcategories', [QuizSubCategoryController::class, 'getSubcategories']);
Route::get('/quiz/subcategories/{id}', [QuizSubCategoryController::class, 'getSubcategoryById']);
Route::get('/quiz/subcategories/{id}/questions', [QuizQuestionController::class, 'getQuizQuestions']);
Route::get('/quiz/questions/{id}', [QuizQuestionController::class, 'getQuizQuestionById']);