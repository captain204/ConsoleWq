<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;


Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'handleLogin'])->name('login');
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('forgot-password');
Route::get('/reset-password', [AuthController::class, 'showResetPassword'])->name('reset-password');




Route::get('/dashboard', function () {
    return view('pages.dashboard', ['title' => 'Dashboard', 'description' => 'Welcome to the dashboard']);
})->name('dashboard');

Route::get('/quiz', function () {
    return view('pages.quiz.list-category');
})->name('quiz.list-category');



Route::get('/new-quiz', function () {
    return view('pages.quiz.create-category');
})->name('quiz.create-category');
