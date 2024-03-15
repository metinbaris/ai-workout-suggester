<?php 

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class SuggestionAIService {

    public function getAIResults() {
        $age = session()->get('age');
        $gender = session()->get('gender');
        $height = session()->get('height');
        $weight = session()->get('weight');
        $goal = session()->get('goal');
        $amount = session()->get('amount');
        $sampleReturn = session()->get('sampleReturn') ?: file_get_contents(public_path('sampleReturn.json'));

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
            You can re-structure it according to your expertise, tailored to the user's needs and preferences.
            Do not add any other sentence or comments besides json return, we will use this return in our app";


        $response = Http::withToken(env('OPEN_AI_SECRET'))
            ->post('https://api.openai.com/v1/chat/completions', [
                "model" => "gpt-4",
                "messages" => [
                    [
                        "role" => "system",
                        "content" => $content
                    ]
                ]
            ]);

        if ($response->successful()) {
            $res = $response->json('choices.0.message.content');
        } else {
            // TODO add logging
            $results = [];
            $error = $response->body();
        }

        return $res;
    }
}