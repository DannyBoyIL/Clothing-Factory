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
                <li class="breadcrumb-item active">Payment</li>
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
                    <li class="nav-item"><a href="{{ url('order/payment') }}" class="nav-link active">Payment Method </a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Order Review</a></li>
                </ul>
                <div class="tab-content">
                    <div id="payment-method" class="tab-block">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <form id="paymentForm" action="{{ url('order/payment') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="card">
                                    <div id="headingOne" role="tab" class="card-header">
                                        <h6>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Credit Card</a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="collapse show">
                                        <div class="card-body">                                       
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="card_name" class="form-label">Name on Card</label>
                                                    <input type="text" name="card_name" placeholder="Name on card" id="card_name" class="form-control" value="{{ old('card_name') }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="card_number" class="form-label">Card Number</label>
                                                    <input type="text" name="card_number" placeholder="Card number" id="card_number" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="expiry_date" class="form-label">Expiry Date</label>
                                                    <input type="text" name="expiry_date" placeholder="MM/YY" id="expiry-date" class="form-control" value="{{ old('expiry_date') }}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="cvv" class="form-label">CVC/CVV</label>
                                                    <input type="text" name="cvv" placeholder="123" id="cvv" class="form-control" value="{{ old('cvv') }}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="zip" class="form-label">ZIP</label>
                                                    <input type="text" name="zip" placeholder="12345" id="zip" class="form-control" value="{{ old('zip') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="headingTwo" role="tab" class="card-header">
                                        <h6>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Paypal</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="collapse">
                                        <div class="card-body">
                                            <input type="radio" name="shippping" id="payment-method-1" value="paypal" class="radio-template">
                                            <label for="payment-method-1">
                                                <strong>Continue with Paypal</strong><br>
                                                <span class="label-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="headingThree" role="tab" class="card-header">
                                        <h6>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Pay on delivery</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="collapse">
                                        <div class="card-body">
                                            <input type="radio" name="shippping" id="payment-method-2" value="ondeliver" class="radio-template">
                                            <label for="payment-method-2">
                                                <strong>Pay on Delivery</strong><br>
                                                <span class="label-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                    <a href="{{ url('order/delivery') }}" class="btn btn-template-outlined wide prev btn-costum"> 
                                        <i class="fa fa-angle-left"></i>Back to Address
                                    </a>
                                    <input class="btn btn-template wide next" type="submit" id="submit" name="submit" value="Continue to order review &#10095;">                                    
                                </div>
                            </form>
                        </div> 
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