<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\QuizCategory;

class DashboardController extends Controller
{
    /**
     * Show the form for user login.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        return view('auth.login');
    }
}
