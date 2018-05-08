<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagDestroyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !$this->route('tags') == config('cms.default_tag_id');
    }

    public function forbiddenResponse()
    {
        return redirect()->back()->with('error-message', 'You cannot delete default tag!');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
