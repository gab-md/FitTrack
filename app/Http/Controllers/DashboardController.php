<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
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
