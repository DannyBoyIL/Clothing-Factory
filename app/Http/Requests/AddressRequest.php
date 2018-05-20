<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest {

    public function authorize() {
        return TRUE;
    }

    public function rules() {
        return [

            'email' => 'required|email',
            'zip' => 'required|numeric',
            'phone_number' => 'required|numeric|regex:/^0\d([\d]{0,1})([-]{0,1})\d{7}$/',
            'address' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'city' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'state' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'country' => 'required|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
        ];
    }

    public function messages() {
        return [
            'phone_number.regex' => 'You must fill out either land line or cellphone valiable numbers',
            'address.regex' => 'A address name must contain letters and single-spaces only',
            'city.regex' => 'A city name must contain letters and single-spaces only',
            'state.regex' => 'A state name must contain letters and single-spaces only',
            'country.regex' => 'A country name must contain letters and single-spaces only',
        ];
    }

}
