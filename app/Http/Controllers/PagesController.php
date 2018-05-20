<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Content;
use App\Menu;

class PagesController extends MainController {

    public function home() {
        self::$data['categories'] = Category::all()->toArray();
        Product::homePageLoader('men', 'women', self::$data);
        self::$data['title'] .= ' Home';
        return view('content.home', self::$data);
    }

    public function about() {
        self::$data['title'] .= ' About us';
        return view('content.about', self::$data);
    }

    public function dynamicMenu($url) {
        self::$data['menu'] = Menu::all()->toArray();
        Content::getContents($url, self::$data);
        return view('content.dyncontent', self::$data);
    }

}
