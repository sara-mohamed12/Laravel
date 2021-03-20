<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'unique:posts'],
            'description' => ['required', 'min:10']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'be careful title is required !',
            'title.min' => 'hey .. title must be more than 3 chars',
            'title.unique' => 'look ! title must be unique ..',
            'description.unique' => 'be careful description is required !',
            'description.min' => 'hey .. description must be more than 3 chars',
        ];
    }
}
