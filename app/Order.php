<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session, DB;

class Order extends Model {

    static public $data = [];

    static function save_address($request) {
        Session::put('shipping_address', [
            "email" => $request['email'],
            "address" => $request['address'],
            "phone" => $request['phone_number'],
            "city" => $request['city'],
            "state" => $request['state'],
            "country" => $request['country'],
            "zip" => $request['zip']
        ]);
    }

    static function save_delivery($request) {
        Session::put('delivery_method', $request['shippping']);
    }

    static function save_payment($request) {

        if ($request['shippping'] == 'paypal' ^ $request['shippping'] == 'onorder') {

            Session::put('payment_method', $request['shippping']);
        } else {

            Session::put('payment_method', [
                "name" => $request['card_name'],
                "number" => $request['card_number'],
                "expiry" => $request['expiry_date'],
                "cvv" => $request['cvv'],
                "zip" => $request['zip']
            ]);
        }
    }

    static public function save_new() {

        $cartCollection = Cart::getContent();
        $data = ["shipping_address" => Session::get('shipping_address'),
            "delivery_method" => Session::get('delivery_method'),
            "payment_method" => Session::get('payment_method'),
            "products" => $cartCollection->toArray(),
        ];

        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($data);
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::forget(
                'shipping_address', 'delivery_method', 'payment_method'
        );
        Session::flash('ms', 'Your order had sent');
    }

    static public function getOrders() {
        $sql = "SELECT u.firstName,u.lastName,o.* FROM orders AS o "
                . " JOIN users AS u ON u.id = o.user_id "
                . " ORDER BY o.created_at DESC";
        $object = DB::select($sql);
        foreach ($object as $obj) {
            $obj->data = unserialize($obj->data);
        }
        return $object;
    }

}
