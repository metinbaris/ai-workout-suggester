<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WorkoutController extends Controller
{
    public function suggestWorkout(Request $request)
    {
        $age = $request->get('age');
        $gender = $request->get('gender');
        $height = $request->get('height');
        $weight = $request->get('weight');
        $goal = $request->get('ion-rg-0');
        $amount = $request->get('ion-rg-1');

        //$results = json_decode(file_get_contents(public_path('sampleReturn.json')));
        $sampleReturn = file_get_contents(public_path('sampleReturn.json'));

        $content = "As a personal trainer with 20 years of experience, equipped with knowledge spanning all genders and ages, here is the user's information:
            - Age: $age
            - Gender: $gender
            - Height: $height centimeters
            - Weight: $weight kilograms
            - Weekly activity level: $amount days per week
            - Primary fitness goal: $goal
            
            Here's a sample JSON structure $sampleReturn
            Please provide a unique weekly workout plan in JSON format on the given information. 
            Be sure you changed every part of given sample return like rest days or spots of activities.
            You can re-structure it according to your expertise, tailored to the user's needs and preferences.";
            

        $response = Http::withToken(env('OPEN_AI_SECRET'))
            ->post('https://api.openai.com/v1/chat/completions', [
                "model" => "gpt-3.5-turbo",
                "messages" => [
                    [
                        "role" => "system",
                        "content" => $content
                    ]
                ]
            ]);

        if ($response->successful()) {
            $results = json_decode($response->json('choices.0.message.content'));
        } else {
            // TODO add logging
            $result = null;
            $error = $response->body();
        }

        return view('results', ['results' => $results]);
    }
}
