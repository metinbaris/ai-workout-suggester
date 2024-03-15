<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;

Route::get('/', [WorkoutController::class, 'home']);
Route::post('/', [WorkoutController::class, 'suggestWorkout']);
Route::post('/refresh-suggestion', [WorkoutController::class, 'refreshSuggestion']);
