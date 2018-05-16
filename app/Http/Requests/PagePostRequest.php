<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagePostRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:pages',
            'body' => 'required',
        ];
        switch ($this->method()){
            case 'PUT':
            case 'PATCH':
                // $rules['slug'] = 'required|unique:pages,slug'.$this->route('pages');
                $rules['slug'] = 'required'.$this->route('pages');;
                break;
        }
        return $rules;
    }
}
