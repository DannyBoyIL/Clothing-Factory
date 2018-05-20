@extends('master')

@section('content')

<!-- Hero Section-->
@if($products)
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-9 order-2 order-md-1">
                <h1>{{ ucfirst(ltrim($title, 'Clo.Factory |')) }}</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
                <li class="breadcrumb-item"><a href="{{ asset('') }}">Home</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<main>
    <div class="container">
        <div class="row">
            <!-- Grid -->
            <div class="products-grid col-12 sidebar-none">
                <header class="d-flex justify-content-between align-items-start"><span class="visible-items">Showing <strong>1-15 </strong>of <strong>158 </strong>results</span>
                    <select id="sorting" class="bs-select">
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="lowest-price">Low Price</option>
                        <option value="heigh-price">High Price</option>
                    </select>
                </header>
                <div class="row">
                    <!-- item-->
                    @foreach($products as $product)
                    <div class="item col-xl-3 col-lg-4 col-md-6">
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
                @include('inc.page-navigation')
            </div>
            <!-- / Grid End-->
        </div>
    </div>
</main>
<!-- Overview Popup    -->
@foreach($products as $product)
<div id="{{ $product['id'] }}" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
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
                    <img src="{{ asset('img/'. $product['image']) }}" alt="{{ $product['title' ] }}" class="img-fluid d-block">
                </div>
                <div class="details col-lg-7">
                    <h2>{{ $product['title' ] }}</h2>
                    <ul class="price list-inline">
                        <li class="list-inline-item current">${{ $product['price'] }}</li>
                        <li class="list-inline-item original">${{ $product['price'] * 1.15 }}</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    <div class="d-flex align-items-center"></div>
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
    </div>
</div>
@endforeach
@else
@include('inc.oops')
@endif
@endsection
