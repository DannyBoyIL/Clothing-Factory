<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\DeliveryRequest;
use App\Http\Requests\PaymentRequest;
use App\Order;
use Cart, Session;

class OrderController extends MainController {

    public function addressPage() {
        self::$data['title'] = ' Address';
        return view('forms.address', self::$data);
    }

    public function postAddress(AddressRequest $request) {
        Order::save_address($request);
        return redirect('order/delivery');
    }

    public function deliveryPage() {
        self::$data['title'] = ' Delivery method';
        return view('forms.delivery', self::$data);
    }

    public function postDelivery(DeliveryRequest $request) {
        Order::save_delivery($request);
        return redirect('order/payment');
    }

    public function paymentPage() {
        self::$data['title'] = ' Payment method';
        return view('forms.payment', self::$data);
    }

    public function postPayment(PaymentRequest $request) {
        Order::save_payment($request);
        return redirect('order/review');
    }

    public function reviewPage() {
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        self::$data['cart'] = $cart;
        self::$data['title'] = ' Order review';
        return view('content.order', self::$data);
    }

    public function order() {
  
        if (Cart::isEmpty()) {

            return redirect('shop/checkout');
        } else {

            if (!Session::has('user_id')) {

                return redirect('user/login?rd=shop/checkout');
            } else {

                Order::save_new();
                return redirect('shop');
            }
        }
    }

}
