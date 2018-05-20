@extends('master')

@section('content')
<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Order</h1>
                <p class="lead text-muted">You currently have {{ Cart::getTotalQuantity() }} items in your shopping cart</p>   
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Order</li>
                <li class="breadcrumb-item active">Review</li>
            </ul>
        </div>
    </div>
</section>
<!-- Checout Forms-->
@if( ! Cart::isEmpty() )
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ url('order/address') }}" class="nav-link">Address</a></li>
                    <li class="nav-item"><a href="{{ url('order/delivery') }}" class="nav-link">Delivery Method </a></li>
                    <li class="nav-item"><a href="{{ url('order/payment') }}" class="nav-link">Payment Method </a></li>
                    <li class="nav-item"><a href="{{ url('order/review') }}" class="nav-link active">Order Review</a></li>
                </ul>
                @if($cart)
                <div class="tab-content">
                    <div id="order-review" class="tab-block">
                        <div class="cart">
                            <div class="cart-holder">
                                <div class="basket-header">
                                    <div class="row">
                                        <div class="col-6">Product</div>
                                        <div class="col-2">Price</div>
                                        <div class="col-2">Quantity</div>
                                        <div class="col-2">Unit Price</div>
                                    </div>
                                </div>
                                <div class="basket-body">
                                    <!-- Product-->
                                    @foreach($cart as $item)
                                    <div class="item row d-flex align-items-center">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('img/' . $item['attributes']['image']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                                <div class="title">
                                                    <a href="{{ url('detail') }}">
                                                        <h6>{{ $item['name'] }}</h6>
                                                        <span class="text-muted">Size: Large</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <span>${{ $item['price'] }}</span>
                                        </div>
                                        <div class="col-2">
                                            <span>{{ $item['quantity'] }}</span>
                                        </div>
                                        <div class="col-2">
                                            <span>${{ $item['quantity'] * $item['price'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="total row">
                                <span class="col-md-10 col-2">Total</span>
                                <span class="col-md-2 col-10 text-primary">${{ Cart::getTotal() }}</span>
                            </div>
                        </div>
                        <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                            <a href="{{ url('order/payment') }}" class="btn btn-template-outlined wide prev btn-costum">
                                <i class="fa fa-angle-left"></i>Back to payment method
                            </a>
                            <a href="{{ url('order/order') }}" class="btn btn-template wide next btn-costum">Place an order
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="block-body order-summary">
                    <h6 class="text-uppercase">Order Summary</h6>
                    <p>Shipping and additional costs are calculated based on values you have entered</p>
                    <ul class="order-menu list-unstyled">
                        <li class="d-flex justify-content-between">
                            <span>Order Subtotal </span>
                            <strong>${{ Cart::getTotal() }}</strong>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Shipping and handling</span>
                            <strong>$10.00</strong>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Tax</span>
                            <strong>$0.00</strong>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Total</span>
                            <strong class="text-primary price-total">${{ Cart::getTotal() + 10 }}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@include('inc.oops')
@endif

@endsection