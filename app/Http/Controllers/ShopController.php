<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Cart;

class ShopController extends MainController {

    public function shop() {
        self::$data['categories'] = json_encode(Category::all()->toArray());
        self::$data['products'] = Product::all()->toArray();
        self::$data['title'] .= 'Shop';
        return view('content.shop', self::$data);
    }

    public function categories() {
        self::$data['categories'] = Category::all()->toArray();
        self::$data['title'] .= 'Shop categories';
        return view('content.category', self::$data);
    }

    public function products($category_url) {
        Product::getProducts($category_url, self::$data);
        self::$data['title'] .= ucfirst($category_url);
        return view('content.products', self::$data);
    }

    public function item($category_url, $product_url) {
        Product::getItem($product_url, self::$data);
        return view('content.detail', self::$data);
    }

    public function checkout(Request $request) {
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        self::$data['title'] = 'My cart';
        return view('content.cart', self::$data);
    }

    public function addToCart(Request $request) {
        Product::addToCart($request['id']);
    }

    public function clearCart() {
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function removeItem(Request $request) {
        Cart::remove($request['id']);
        $product = Cart::getContent();
        $product = $product->toArray();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request) {
        Product::updateCart($request);
    }

}
