<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest {

    public function authorize() {
        return TRUE;
    }

    public function rules(Request $request) {

        $item_id = ! empty($request['item_id']) ? ',' . $request['item_id'] : '';
        
        return [
            'title' => 'required',
            'url' => 'required|unique:categories,url' . $item_id,
            'price' => 'required|numeric|integer',
            'article' => 'required',
            'image' => 'image',
        ];
    }

}
