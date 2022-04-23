<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProblemRequest extends FormRequest
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
        return
        [
             'title' => 'required|string|max:255',
             'category_id' => 'required|not_in:none',
             'thumbnail' => 'required',
        ];

    }


    public function messages()

    {

        return [

            'category_id.required' => 'The Category field is required',
            'category_id.not_in' => 'The Category field can\'t be empty',

        ];

    }
}
