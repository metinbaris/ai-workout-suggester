<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkoutRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'age' => 'required|integer|min:18|max:90',
            'gender' => 'required|in:male,female,non-binary',
            'height' => 'required',
            'weight' => 'required',
            'ion-rg-1' => 'required|in:0,1-2,3-4,5+',
        ];
    }

}
