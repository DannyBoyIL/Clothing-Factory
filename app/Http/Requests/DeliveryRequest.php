<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest {

    public function authorize() {
        return TRUE;
    }

    public function rules() {
        return [
            'shippping' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'shippping.required' => 'You must choose a delivery method',
        ];
    }

}
