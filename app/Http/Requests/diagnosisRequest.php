<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class diagnosisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'diarrhorea'=>'required',
            'vomiting'=>'required',
            'dehydration'=>'required',
        ];
    }
}
