<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'text' => 'required|min:10|max:255',
            'web_site' => 'min:5|max:20'
        ];
    }

    public function attributes()
    {

      return[

          'text' => 'Комментарий',
          'web_site' => 'Веб-сайт'

        ];

    }


}
