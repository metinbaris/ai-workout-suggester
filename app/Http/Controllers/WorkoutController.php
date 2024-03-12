<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function suggestWorkout(Request $request)
    {
        var_dump($request->all());
        die;

        return view('results');
    }
}
