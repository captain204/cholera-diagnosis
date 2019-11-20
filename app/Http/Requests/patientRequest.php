<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class patientRequest extends FormRequest
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
            'firstname' => 'required|max:256',
            'lastname' => 'required|max:256',
            'marital_status' => 'required',
            'date_birth' => 'required',
            'phone' => 'required|digits:11',
            'email' =>'required|email',
            'address' =>'required',
            'occupation' =>'required',
        ];
    }
}
