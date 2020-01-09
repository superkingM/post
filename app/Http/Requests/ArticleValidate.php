<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleValidate extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'title' => 'required|unique:articles|max:255',
                    'content' => 'required',
                    'description' => 'required',
                    'keywords' => 'required'

                ];
            case 'PUT':
                return [
                    'title' => 'required|max:255',
                    'content' => 'required',
                    'description' => 'required',
                    'keywords' => 'required'
                ];
        }
    }

}
