@extends('master')

@section('content')

<!-- Hero Section-->
@if($product)
<section class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-9 order-2 order-md-1"></div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $product['title'] }}</li>
            </ul>
        </div>
    </div>
</section>
<section class="product-details no-padding-top">
    <div class="container">
        <div class="row">
            <div class="product-images col-lg-6">
                <!-- fresh sale Cart::-->
                <div data-slider-id="1" class="owl-carousel items-slider owl-drag">
                    <!-- iteration Cart::-->                    
                    <div class="item"><img src="{{ asset('img/' . $product['image']) }}" alt="shirt"></div>
                    <!-- enditeration -->
                </div>
                <!-- / -->
            </div>
            <div class="details col-lg-6">
                <h2>{{ $product['title'] }}</h2>
                <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
                    <ul class="price list-inline no-margin">
                        <li class="list-inline-item current">${{ $product['price'] }}</li>
                        <li class="list-inline-item original">${{ $product['price'] * 1.15 }}</li>
                    </ul>
                    <div class="review d-flex align-items-center">
                        <ul class="rate list-inline">
                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                        </ul><span class="text-muted">No reviews</span>
                    </div>
                </div>
                <p>{!! $product['article'] !!}</p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start"></div>
                <ul class="CTAs list-inline">
                    <li class="list-inline-item">
                        <span class="add-to-cart btn btn-template wide" data-id="{{ $product['id'] }}">
                            <i class="icon-cart"></i>Add to Cart
                        </span>
                    </li>
                    <li class="list-inline-item">
                        <span class="btn btn-template-outlined wide"> 
                            <i class="fa fa-heart-o"></i>Add to wishlist
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product-description no-padding">
    <div class="container">
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link active">Description</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link">Additional Information</a></li>
        </ul>
        <div class="tab-content">
            <div id="description" role="tabpanel" class="tab-pane active">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div id="additional-information" role="tabpanel" class="tab-pane">
                <ul class="list-unstyled additional-information">
                    <li class="d-flex justify-content-between"><strong>Compsition:</strong><span>Cottom</span></li>
                    <li class="d-flex justify-content-between"><strong>Styles:</strong><span>Casual</span></li>
                    <li class="d-flex justify-content-between"><strong>Properties:</strong><span>Short Sleeve</span></li>
                    <li class="d-flex justify-content-between"><strong>Brand:</strong><span>Calvin Klein</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="share-product gray-bg d-flex align-items-center justify-content-center flex-column flex-md-row"><strong class="text-uppercase">Share this on</strong>
            <ul class="list-inline text-center">
                @include('inc.social')                
            </ul>
        </div>
    </div>
</section>
@else
@include('inc.oops')
@endif
@endsection
