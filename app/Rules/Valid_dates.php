<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Valid_dates implements Rule {

    public function __construct() {
        
    }

    public function passes($attribute, $value) {
     
        $arr = explode('/', $value);
        $exp = mktime(0, 0, 0, $arr[0], 30, $arr[1]);
        $min = time();
        $max = time() + 60 * 60 * 24 * 365.2422 * 10;

        if ($exp < $min || $exp > $max) {
            return FALSE;
        }

        return TRUE;
    }

    public function message() {
        return 'The expiry date is invalid.';
    }

}
