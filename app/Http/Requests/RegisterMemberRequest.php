<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'nomcomplet' => 'required',
            'profession' => 'required',
            'age' => 'required',
            'sexe' => 'required',
            'password' => 'required|confirmed',
            'numero_membre' => 'nullable|unique:membres,numero_membre'
        ];
    }
}
