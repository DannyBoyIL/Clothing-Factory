@extends('master')

@section('content')
<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Shopping Cart</h1>
                <p class="lead text-muted">You currently have {{ Cart::getTotalQuantity() }} items in your shopping cart</p>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</section>
<!-- Shopping Cart Section-->
@if($cart)
<section class="shopping-cart">
    <div class="container">
        <div class="basket">
            <div class="basket-holder">
                <div class="basket-header">
                    <div class="row">
                        <div class="col-5">Product</div>
                        <div class="col-2">Price</div>
                        <div class="col-2">Quantity</div>
                        <div class="col-2">Total</div>
                        <div class="col-1 text-center">Remove</div>
                    </div>
                </div>
                <div class="basket-body">
                    <!-- Product-->
                    @foreach($cart as $item)
                    <div class="item">
                        <div class="row d-flex align-items-center">
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/' . $item['attributes']['image']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                    <div class="title">
                                        <a href="{{ url('') }}">
                                            <h5>{{ $item['name'] }}</h5>
                                            <span class="text-muted">Size: Large</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>${{ $item['price'] }}</span>
                            </div>
                            <div class="col-2">
                                <div class="d-flex align-items-center">
                                    <div class="quantity d-flex align-items-center">
                                        <div class="dec-btn update-q-btn" data-op="min" data-id="{{ $item['id'] }}">-</div>
                                        <input type="text" value="{{ $item['quantity'] }}" class="quantity-no">
                                        <div class="inc-btn update-q-btn" data-op="plus" data-id="{{ $item['id'] }}">+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>${{ $item['quantity'] * $item['price'] }}</span>
                            </div>
                            <div class="col-1 text-center">
                                <a href="{{ url('shop/remove-item?id=' . $item['id']) }}">
                                    <i class="delete fa fa-trash-o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
            <a href="{{ url('shop') }}" class="btn btn-template wide">Continue Shopping</a>
            <a href="{{ url('shop/clear-cart') }}" class="btn btn-template-outlined wide">Clear</a>
        </div>
    </div>
</section>

<!-- Order Details Section-->
<section class="order-details no-padding-top"> 
    <div class="container">
        <div class="row">                         
            <div class="col-lg-6">
                <div class="block">
                    <div class="block-header">
                        <h6 class="text-uppercase">Coupon Code</h6>
                    </div>
                    <div class="block-body">
                        <p>If you have a coupon code, please enter it in the box below</p>
                        <form action="{{ url('') }}">
                            <div class="form-group d-flex">
                                <input type="text" name="coupon">
                                <button type="submit">Apply Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h6 class="text-uppercase">Instructions for seller</h6>
                    </div>
                    <div class="block-body">
                        <p>If you have some information for the seller you can leave them in the box below</p>
                        <form action="">
                            <textarea name="instructions"></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block">
                    <div class="block-header">
                        <h6 class="text-uppercase">Order Summary</h6>
                    </div>
                    <div class="block-body">
                        <p>Shipping and additional costs are calculated based on values you have entered.</p>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between">
                                <span>Order Subtotal </span>
                                <strong>${{ Cart::getTotal() }}</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping and handling</span>
                                <strong>$10.00</strong></li>
                            <li class="d-flex justify-content-between">
                                <span>Tax</span>
                                <strong>$0.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <strong class="text-primary price-total">${{ Cart::getTotal() + 10 }}</strong>
                                <!-- Cart::getTotal()->condition() -->
                            </li>
                        </ul>
                    </div>                 
                </div>
            </div>
            <div class="col-lg-12 text-center CTAs">
                <a href="{{ url('order/address') }}" class="btn btn-template btn-lg wide">Proceed to checkout
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@elseif( Cart::isEmpty() )
<!-- text page-->
<section class="padding-small">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <h4 class="text-superbig">We're empty!</h4>
            </div>
        </div>
    </div>
</section>
@else
@include('inc.oops')
@endif

@endsection