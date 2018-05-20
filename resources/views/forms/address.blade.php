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
                <li class="breadcrumb-item active">Address</li>
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
                    <li class="nav-item"><a href="{{ url('order/address') }}" class="nav-link active">Address</a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Delivery Method </a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Payment Method </a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Order Review</a></li>
                </ul>
                <div class="tab-content">
                    <div id="address" class="active tab-block">
                        <form action="{{ url('order/address') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">                                
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" type="text" name="email" placeholder="enter your email address" value="{{ old('email') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="street" class="form-label">Street</label>
                                    <input id="street" type="text" name="address" placeholder="Your street name" value="{{ old('address') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="city" class="form-label">City</label>
                                    <input id="city" type="text" name="city" placeholder="Your city" value="{{ old('city') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="zip" class="form-label">ZIP</label>
                                    <input id="zip" type="text" name="zip" placeholder="ZIP code" value="{{ old('zip') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="state" class="form-label">State</label>
                                    <input id="state" type="text" name="state" placeholder="Your state" value="{{ old('state') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input id="country" type="text" name="country" placeholder="Your country" value="{{ old('country') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone-number" class="form-label">Phone Number</label>
                                    <input id="phone-number" type="text" name="phone_number" placeholder="Your phone number" value="{{ old('phone_number') }}" class="form-control">
                                </div>                                
                            </div>
                            <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                <a href="{{ url('shop/checkout') }}" class="btn btn-template-outlined wide prev btn-costum"> 
                                    <i class="fa fa-angle-left"></i>Back to basket
                                </a>
                                <input class="btn btn-template wide next" type="submit" id="submit" name="submit" value="Choose delivery method &#10095;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('inc.orderError')
        </div>
    </div>
</section>
@else
@include('inc.oops')
@endif

@endsection