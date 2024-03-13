<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;

Route::get('/', function () { return view('home'); });
Route::post('/', [WorkoutController::class, 'suggestWorkout']);
