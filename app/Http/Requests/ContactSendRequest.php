<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactSendRequest extends FormRequest
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
            'contact_subject' => 'required',
            'contact_name' => 'required|min:3|max:30',
            'contact_email' => 'required|email|max:30',
            'contact_text' => 'required|min:6|max:1000',
        ];
    }

    /*
    public function messages()
    {
        return [
            'email.required' => 'Er, you forgot your email address!',
            'email.unique' => 'Email already taken m8',
        ];
    }
    */
}
