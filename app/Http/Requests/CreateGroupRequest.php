<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
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
            'group_name' => 'required|min:3|max:250',
        ];
    }

    public function messages()
    {
        return [
            'group_name.required' => 'Введіть назву',
            'group_name.min'  => 'Мінімальна довжина назви: 3',
        ];
    }
}
