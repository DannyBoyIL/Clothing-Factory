<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

    public function authorize() {
        return TRUE;
    }

    public function rules() {
        return [
            'first_name' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'last_name' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed',
        ];
    }
    
    public function messages() {
        return [
            'first_name.regex' => 'A valid first name must contain letters and single-spaces only',
            'last_name.regex' => 'A valid surname name must contain letters and single-spaces only',
        ];
    }

}
