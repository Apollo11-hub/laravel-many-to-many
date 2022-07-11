<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=> 'required|max:255|min:3',
            'contenet'=> 'required|min:4'
        ];
    }
    public function messages()
    {
        return[

            'title.required' => 'Il Titolo è obbligatorio',
            'title.min' => 'La lunghezza del Titolo deve essere di :min',
            'title.max' => 'La lunghezza del Titolo deve essere di :max',
            'contenet.required' => 'Il contenuto è obbligatorio',
            'contenet.min' => 'La lunghezza del contenuto deve essere di :min'
        ];
    }
}
