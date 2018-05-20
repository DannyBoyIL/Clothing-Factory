@extends('master')

@section('content')
<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-9 order-2 order-md-1">
                <h1>{{ ltrim($title, 'Clo.Factory |')}}</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
                <li class="breadcrumb-item"><a href="{{ url('')}}">Home</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ul>
        </div>
    </div>
</section>
@if( $products )
<div ng-app="CFModule" ng-controller="shopController" ng-init="getProducts({{json_encode($products)}})">
    <main>
        <div class="container" ng-init="getCategories({{$categories}})">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar col-xl-3 col-lg-4 sidebar">
                    <div class="block">
                        <h6 class="text-uppercase">Product Categories</h6>
                        <ul class="list-unstyled">
                            <li ng-repeat="category in categories"> <!-- class="active" -->
                                <a href="{{ url('')}}/shop/@{{category.url}}" ng-click="sortByCategory(category.id)" class="d-flex justify-content-between align-items-center" ng-model="searchCategory">
                                    <span>@{{ category.title}}</span>
                                    <small>@{{ counculate(category.id)}}</small>
                                </a>
                                <ul class="list-unstyled">
                                    <li> <a href="#">T-shirts</a></li>
                                    <li> <a href="#">Hoodies</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>                    
                    <div class="block"> 
                        <h6 class="text-uppercase">Size </h6>
                        <form action="#">  
                            <div class="form-group">
                                <input id="small" type="radio" name="size" class="radio-template">
                                <label for="small">Small</label>
                            </div>
                            <div class="form-group">
                                <input id="medium" type="radio" name="size" checked class="radio-template">
                                <label for="medium">Medium</label>
                            </div>
                            <div class="form-group">
                                <input id="large" type="radio" name="size" class="radio-template">
                                <label for="large">Large</label>
                            </div>
                            <div class="form-group">
                                <input id="x-large" type="radio" name="size" class="radio-template">
                                <label for="x-large">x-Large</label>
                            </div>
                        </form>
                    </div>
                    <div class="block">
                        <h6 class="text-uppercase">Brands </h6>
                        <form action="#">
                            <div class="form-group">
                                <input id="calvin" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                                <label for="calvin">Calvin Klein <small>(18)</small></label>
                            </div>
                            <div class="form-group">
                                <input id="levi-strauss" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                                <label for="levi-strauss">Levi Strauss <small>(30)</small></label>
                            </div>
                            <div class="form-group">
                                <input id="hugo-boss" type="checkbox" name="clothes-brand" class="checkbox-template">
                                <label for="hugo-boss">Hugo Boss <small>(120)</small></label>
                            </div>
                            <div class="form-group">
                                <input id="tomi-hilfiger" type="checkbox" name="clothes-brand" class="checkbox-template">
                                <label for="tomi-hilfiger">Tomi Hilfiger <small>(70)</small></label>
                            </div>
                            <div class="form-group">
                                <input id="tom-ford" type="checkbox" name="clothes-brand" class="checkbox-template">
                                <label for="tom-ford">Tom Ford <small>(110)</small></label>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Sidebar end-->
                <!-- Grid -->
                <div class="products-grid col-xl-9 col-lg-8 sidebar-left">
                    <header class="d-flex justify-content-between align-items-start">                        
                        <span class="visible-items">Showing 
                            <strong>1-15 </strong>of 
                            <strong>158 </strong>results
                        </span>                        
                        <select id="sorting" class="bs-select" ng-model="sortProducts">
                            <option value="+updated_at">Newest</option>
                            <option value="+created_at">Oldest</option>
                            <option value="+price">Low Price</option>
                            <option value="-price">High Price</option>
                        </select>
                    </header>
                    <div class="row">
                        <!-- item -->
                        <div class="item col-xl-4 col-md-6" ng-repeat="product in products | orderBy:sortProducts">        
                            <div class="product is-gray">
                                <div class="image d-flex align-items-center justify-content-center">
                                    <img ng-src="{{ url('') }}/img/@{{product.image}}" alt="@{{product.title}}" class="img-fluid">
                                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                                        <div class="CTA d-flex align-items-center justify-content-center">
                                            <a class="add-to-cart" ng-id="@{{product.id}}" ng-click="addToCart()">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <a href="{{ url('') }}/shop/item/@{{product.url}}" class="visit-product active">
                                                <i class="icon-search"></i>View
                                            </a>
                                            <a href="" data-toggle="modal" data-target="#{{ $id = '{{product.id}'.'}'}}" class="quick-view">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <small class="text-muted">@{{product.title}}</small>
                                    <a href=" url('shop/$category_url/' . $product['url']) }}">
                                        <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3>
                                    </a>
                                    <span class="price text-muted">$@{{product.price}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- /item -->
                    </div>
                    @include('inc.page-navigation')
                </div>
                <!-- / Grid End-->
            </div>
        </div>
    </main>
    <!-- Overview Popup    -->
    @foreach( $products as $product )
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
                        <img ng-src="{{ url('img/' . $product['image'] ) }}" alt="{{ $product['title'] }}" class="img-fluid d-block">
                    </div>
                    <div class="details col-lg-7">
                        <h2>{{ $product['title'] }}</h2>
                        <ul class="price list-inline">
                            <li class="list-inline-item current">${{ $product['price'] }}</li>
                            <li class="list-inline-item original">${{ $product['price'] * 1.15}}</li>
                        </ul>
                        <p>{!! $product['article'] !!}</p>
                        <div class="d-flex align-items-center"></div>
                        <ul class="CTAs list-inline">
                            <li class="list-inline-item">
                                <span class="add-to-cart btn btn-template wide" ng-id="product.id" ng-click="addToCart()">
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
</div>
@else
@include('inc.oops')
@endif
@endsection