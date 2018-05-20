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
                <li class="breadcrumb-item active">Delivery</li>
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
                    <li class="nav-item"><a href="{{ url('order/delivery') }}" class="nav-link active">Delivery Method </a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Payment Method </a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Order Review</a></li>
                </ul>

                <div class="tab-content">
                    <div id="delivery-method" class="tab-block">
                        <form action="{{ url('order/delivery') }}" method="POST"  class="shipping-form">
                            {{ csrf_field() }}
                            <div class="row"> 
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option1" value="shipping" class="radio-template">
                                    <label for="option1">
                                        <strong>Usps next day</strong><br>
                                        <span class="label-description">Get it right on next day - fastest option possible.</span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option2" value="collection" class="radio-template">
                                    <label for="option2">
                                        <strong>Pick me up</strong><br>
                                        <span class="label-description">Get it when you have time - easiest option possible.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                <a href="{{ url('order/address') }}" class="btn btn-template-outlined wide prev btn-costum"> 
                                    <i class="fa fa-angle-left"></i>Back to Address
                                </a>
                                <input class="btn btn-template wide next" type="submit" id="submit" name="submit" value="Choose payment method &#10095;">                                    
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