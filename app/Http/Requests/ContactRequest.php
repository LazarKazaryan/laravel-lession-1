<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    public function rules(){
        return [
            "name" => "required",
            "email" => "required|email",
            "subject" => "required|min:5|max:50",
            "message" => "required|max:500"
        ];
    }

    // public function attributes(){
    //     return [
    //         "name" => "username"
    //     ];
    // }

    public function messages(){
        return [
            "name.required" => "Name field is empty",
            "email.required" => "Email field is empty",
            "subject.required" => "Subject field is empty",
            "message.required" => "Message field is empty",
        ];
    }
}
