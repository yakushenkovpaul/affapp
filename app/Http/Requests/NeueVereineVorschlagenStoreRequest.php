<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NeueVereineVorschlagenStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'address' => 'required|min:3|max:200',
            'email' => 'required|email|min:5|max:50',
            'phone' => 'required|min:5|max:20',
            'image' => 'mimes:jpeg,png,jpg',
            'description' => 'max:500',
        ];
    }
}
