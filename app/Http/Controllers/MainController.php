<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\Product;

class MainController extends Controller {

    static public $data = ['title' => 'Clo.Factory | '];

    function __construct() {
        self::$data['menu'] = Menu::all()->toArray();
        self::$data['category'] = Category::all()->toArray();
        self::$data['products'] = Product::all()->toArray();
    }

}
