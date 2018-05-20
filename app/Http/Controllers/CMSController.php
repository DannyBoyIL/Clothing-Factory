<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CMSController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }


    public function dashboard() {
//        return view('cms.foo', self::$data);
        return view('cms.content.dashboard', self::$data);
    }

    public function orders() {
        self::$data['orders'] = Order::getOrders();
        return view('cms.content.orders', self::$data);
    }
    
}