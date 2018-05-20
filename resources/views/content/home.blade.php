@extends('master')

@section('content')
<!-- Hero Section-->
<section class="hero hero-home no-padding">
    <!-- Hero Slider-->
    @include('inc.slider')
</section>
<!-- Categories Section-->
@include('inc.categories')
<!--Men's Collection--> 
<section class="men-collection gray-bg">
    <div class="container">
        <header class="text-center">
            <h2 class="text-uppercase"><small>Autumn Choice</small>Men Collection</h2>
        </header>
        <!--Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
            <!--item--> 
            @foreach( $products[0] as $product )
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/'. $product['image']) }}" alt="{{ $product['title' ] }}" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                            <div class="CTA d-flex align-items-center justify-content-center">
                                <a class="add-to-cart" data-id="{{ $product['id'] }}">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a href="{{ url('shop/item/' . $product['url']) }}" class="visit-product active">
                                    <i class="icon-search"></i>View
                                </a>                                
                                <a href="" data-toggle="modal" data-target="#{{ $product['id'] }}" class="quick-view">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                               
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <small class="text-muted">{{ $product['title'] }}</small>
                        <a href="{{ url('shop/$category_url/' . $product['url']) }}">
                            <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3>
                        </a>
                        <span class="price text-muted">${{ $product['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Divider Section-->
@include('inc.divider')
<!-- Women's Collection -->
<section class="women-collection">
    <div class="container">
        <header class="text-center">
            <h2 class="text-uppercase"><small>Ladies' Time</small>Women Collection</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
            <!-- item-->
            @foreach( $products[1] as $product )
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/'. $product['image']) }}" alt="{{ $product['title' ] }}" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                            <div class="CTA d-flex align-items-center justify-content-center">
                                <a class="add-to-cart" data-id="{{ $product['id'] }}">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a href="{{ url('shop/item/' . $product['url']) }}" class="visit-product active">
                                    <i class="icon-search"></i>View
                                </a>
                                <a href="" data-toggle="modal" data-target="#{{ $product['id'] }}" class="quick-view">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <small class="text-muted">{{ $product['title'] }}</small>
                        <a href="{{ url('shop/$category_url/' . $product['url']) }}">
                            <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3>
                        </a>
                        <span class="price text-muted">${{ $product['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Section-->
@include('inc.blog')
<!-- Brands Section-->
@include('inc.brands')
<!-- Overview Popup    -->
@foreach( $products as $product => $val )
@foreach( $val as $item )
<div id="{{ $item['id'] }}" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                <span aria-hidden="true">
                    <i class="icon-close"></i>
                </span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row d-flex align-items-center">
                <div class="image col-lg-5">
                    <img src="{{ asset('img/'. $item['image']) }}" alt="{{ $item['title' ] }}" class="img-fluid d-block">
                </div>
                <div class="details col-lg-7">
                    <h2>{{ $item['title' ] }}</h2>
                    <ul class="price list-inline">
                        <li class="list-inline-item current">${{ $item['price'] }}</li>
                        <li class="list-inline-item original">${{ $item['price'] * 1.15 }}</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    <div class="d-flex align-items-center"></div>
                    <ul class="CTAs list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-template wide"> 
                                <i class="fa fa-shopping-cart"></i>Add to Cart
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="visit-product active btn-template-outlined wide"> 
                                <i class="icon-search"></i>View
                                Add to wishlist
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach
@endsection

