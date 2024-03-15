<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutRequest;
use App\Http\Services\SuggestionAIService;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    private $suggestionAIService;

    public function __construct(SuggestionAIService $suggestionAIService)
    {
        $this->suggestionAIService = $suggestionAIService;
    }

    public function home() {
        session()->remove('sampleReturn');

        return view('home');
    }

    public function suggestWorkout(WorkoutRequest $request)
    {
        session([
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'weight' => $request->input('weight'),
            'goal' => $request->input('ion-rg-0'),
            'amount' => $request->input('ion-rg-1')
        ]);
        $results = $this->suggestionAIService->getAIResults();
        session()->put('sampleReturn', $results);

        return view('results', ['results' => json_decode($results)]);
    }

    public function refreshSuggestion(Request $request)
    {
        $results = $this->suggestionAIService->getAIResults();
    
        return view('results', ['results' => json_decode($results)]);
    }
}
