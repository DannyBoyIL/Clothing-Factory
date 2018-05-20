<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\Valid_dates;

class PaymentRequest extends FormRequest {

    public function authorize() {
        return TRUE;
    }

    public function rules(Request $request) {

        if (!empty($request['card_name'])) {

            return [
                'card_name' => 'required|regex:/^[A-Z][a-z]*\s[A-Z][a-z]*$/i',
                'card_number' => ['required', 'numeric', 'regex:/^(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11}))$/'],
                'expiry_date' => ['required', 'date_format:m/y', new Valid_dates],
                'cvv' => 'required|digits:3',
                'zip' => 'digits_between:5,6',
            ];
        } else {
            return ['shippping' => 'required',];
        }
    }

    public function messages() {
        return [
            'shippping.required' => 'You must choose a payment method.',
            'card_name.regex' => 'A valid name must contain letters and single-spaces only.',
            'card_number.regex' => 'We only accept Visa, MasterCard, American express & Diners Club credit cards.',
            'expiry_date.date_format' => 'The expiry date does not match the format.',
        ];
    }

}
