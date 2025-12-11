<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // data is static for now
        return view('dashboard', [
            'caloriesConsumed' => 0,
            'caloriesBurned' => 0,
            'netCalories' => 0,
            'workoutTime' => 0,

            'protein' => 0,
            'carbs' => 0,
            'fats' => 0,

            'recentMeals' => [],
            'recentWorkouts' => [],
        ]);
    }
}
