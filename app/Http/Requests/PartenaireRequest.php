<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartenaireRequest extends FormRequest
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
        return [
            'libelle' => 'required | max:191'
        ];
    }

    public function messages() {
        return [
            'libelle.required' => 'Le libellé ne doit pas être vide',
            'libelle.max' => 'Le Libellé ne doit pas dépasser 63 caractères'
        ];
    }
}
