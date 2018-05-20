<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session;

class Product extends Model {

    static public function homePageLoader($category_m, $category_w, &$data) {

        $data['products'] = [];

        $man_category = Category::where('url', '=', $category_m)->first();
        $woman_category = Category::where('url', '=', $category_w)->first();

        $man_category = $man_category->toArray();
        $woman_category = $woman_category->toArray();

        $man_products = Category::find($man_category['id'])->products;
        $woman_products = Category::find($woman_category['id'])->products;

        $data['products'] = [$man_products->toArray(), $woman_products->toArray()];
    }

    static public function getProducts($category_url, &$data) {

        $data['products'] = [];

        if ($category = Category::where('url', '=', $category_url)->first()) {

            $category = $category->toArray();

            if ($products = Category::find($category['id'])->products) {

                $data['products'] = $products->toArray();
            }
        }
    }

    static public function getItem($product_url, &$data) {

        $data['product'] = [];

        if ($product = Product::where('url', '=', $product_url)->first()) {

            $data['product'] = $product->toArray();
            $data['title'] .= $data['product']['title']; /* page title problem */
        }
    }

    static public function addToCart($product_id) {

        if ($product_id && is_numeric($product_id)) {

            if ($product = self::find($product_id)) {

                $product = $product->toArray();

                if (!Cart::get($product_id)) { // for one product per click
                    Cart::add($product_id, $product['title'], $product['price'], 1, ['image' => $product['image'], 'url' => $product['url'], 'size' => 'L']);
                    Session::flash('ms', '<b>' . $product['title'] . '</b>,' . ' added to cart');
                }
            }
        }
    }

    static public function updateCart($request) {

        if (!empty($request['op']) && !empty($request['id'])) {

            if (is_numeric($request['id'])) {

                if ($product = Cart::get($request['id'])) {

                    if ($request['op'] == 'plus') {

                        Cart::update($request['id'], ['quantity' => 1]);
                    } elseif ($request['op'] == 'min') {

                        $product = $product->toArray();

                        if ($product['quantity'] - 1 == 0) {
                            Cart::remove($request['id']);
                        } else {
                            Cart::update($request['id'], ['quantity' => -1]);
                        }
                    }
                }
            }
        }
    }

    static public function save_new($request) {

        try {
            $image = 'defualt.png';
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $image = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
                $request->file('image')->move(public_path() . '/images', $image);
            }
            $product = new self();
            $product->category_id = $request['category_id'];
            $product->title = $request['title'];
            $product->article = $request['article'];
            $product->image = $image;
            $product->price = $request['price'];
            $product->url = $request['url'];
            $product->save();
            Session::flash('sm', 'A new product was successfuly added to the site');
        } catch (Exception $e) {
            echo 'Huston. We have a problem.';
        }
    }

    static public function update_item($request, $id) {
        $image = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image);
        }
        $product = self::find($id);
        $product->category_id = $request['category_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        if ($image) {
            $product->image = $image;
        }
        $product->url = $request['url'];
        $product->save();
        Session::flash('sm', 'The product was successfuly updated');
    }

}
