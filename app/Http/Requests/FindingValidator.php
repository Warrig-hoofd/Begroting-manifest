<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FindingValidator extends FormRequest
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
            'achternaam'    => 'required',
            'voornaam  '    => 'required',
            'email'         => 'required',
            'geboortedatum' => 'required',
            'bedrag'        => 'required',
            'bron'          => 'required',
        ];
    }
}
