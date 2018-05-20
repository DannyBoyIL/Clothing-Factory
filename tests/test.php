<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @if( !empty($title) )
            {{ $title }}
            @endif
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap.min.css') }}">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/font-awesome.min.css') }}">
        <!-- Bootstrap Select -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap-select.min.css') }}">
        <!-- Price Slider Stylesheets -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/nouislider.css') }}">
        <!-- Custom font icons -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/custom-fonticons.css') }}">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/hub/css/owl.theme.default.css') }}">
        <!-- theme stylesheet -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/style.default.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/custom.css') }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('lib/hub/img/favicon.ico') }}">
        <!-- Modernizr -->
        <script src="{{ asset('lib/hub/js/modernizr.custom.79639.js') }}"></script>
        <!-- AngularJS CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
        <!-- Clothing Factory App -->
        <script src="{{ asset('js/ClothingFactoryApp.js') }}" type="text/javascript"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script>
var BASE_URL = "{{ url('') }}/";
        </script>
    </head>
    <body>
        @if(Session::has('is_admin'))
        <!-- Tob Bar-->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hidden-lg-down text-col">
                        <ul class="list-inline">
                            <li class="list-inline-item" style="margin-top: 0.5rem"><h6>Admin pannel</h6></li>                            
                        </ul>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <!-- Language Dropdown-->
                        <div class="dropdown show">
                            <a href="{{ url('cms/dashboard') }}"><b>CMS Pannel</b></a>
                        </div>    
                        <!-- Currency Dropdown-->
                        <div class="dropdown show">
                            <a href="{{ url('user/logout') }}"><b>Logout</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="search-area">
                    <div class="search-area-inner d-flex align-items-center justify-content-center">
                        <div class="close-btn">
                            <i class="icon-close"></i>
                        </div>

                        <!-- Ajax search iteration -->
                        <form action="#">
                            <div class="form-group">
                                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                                <button type="submit" class="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- /enditeration -->

                    </div>
                </div>

                @if( Session::has('ms') )
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#search">Search</a></li>
                </ul>
                <div id="search">
                    <button type="button" class="close">×</button>
                    <form>
                        <input type="search" value="" placeholder="type keyword(s) here" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                @endif

                @if( Session::has('ms') )
                <div class="ms-area">
                    <div class="ms-area-inner d-flex align-items-center justify-content-center">
                        <div class="close-btn ms-close-btn">
                            <i class="icon-close"></i>
                        </div>
                        <div class="form-group">
                            <p>{!! Session::get('ms') !!}</p> 
                        </div>
                    </div>
                </div>
                @endif
                <div class="container-fluid">  
                    <!-- Navbar Header  -->
                    <a href="{{ url('') }}" class="navbar-brand">
                        <img src="{{ asset('img/logo-robot.png') }}" alt="clothing-factory-logo" width="45">
                        <h6 style="margin-bottom: 0rem">Clothing Factory</h6>
                    </a>
                    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Navbar Collapse -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="{{ url('') }}" class="nav-link active">Home</a>
                            </li>
                            @if( $menu )
                            @foreach( $menu as $item )
                            <li class="nav-item">
                                <a href="{{ url($item['url']) }}" class="nav-link">{{ $item['link'] }}</a>
                            </li>
                            @endforeach
                            @endif
                            <li class="nav-item">
                                <a href="{{ url('shop') }}" class="nav-link">Shop</a>
                            </li>
                            <!-- /Megamenu end-->
                        </ul>
                        <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
                            <!-- Search Button-->
                            <div class="search"><i class="icon-search"></i></div>
                            <!-- User Dropdown-->
                            <div class="user dropdown show">
                                <a id="userdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="icon-profile"></i>
                                </a>
                                <ul aria-labelledby="userdetails" class="dropdown-menu"> 
                                    @verbatim
                                    <li class="dropdown-item"><a href="#!/profile">Profile</a></li>
                                    @endverbatim
                                    <li class="dropdown-item"><a href="{{ url('user/register') }}">Register</a></li>
                                    <li class="dropdown-divider"></li>
                                    @if( ! Session::has('user_id'))
                                    <li class="dropdown-submenu">
                                        <a id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Login
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu">
                                            <div class="col-md-12">
                                                <div class="tab-content">
                                                    <div id="address" class="active tab-block">
                                                        <form action="{{ url('user/login') }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <br>
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input id="email" type="text" name="email" placeholder="enter your email address" class="form-control" value="{{ old('email') }}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="password" class="form-label">Password</label>
                                                                    <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <div class="CTAs d-flex justify-content-between flex-column flex-md-row">
                                                                        <input class="btn btn-template wide next" type="submit" id="submit" name="submit" value="Sign in!">                           
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="dropdown-item"><a href="{{ url('user/logout') }}">Logout</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Cart Dropdown-->
                            <div class="cart dropdown show">
                                <!-- cart item-->
                                <a id="cartdetails" href="{{ url('cart') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="icon-cart"></i>
                                    <div class="cart-no">{{ Cart::getTotalQuantity() }}</div>
                                </a>
                                <a href="{{ url('shop/checkout') }}" class="text-primary view-cart">View Cart</a>
                                <div aria-labelledby="cartdetails" class="dropdown-menu">

                                    <!-- cart item-->
                                    @if( $cart = ($cartCollection = Cart::getContent())->toArray() )
                                    @foreach($cart as $item)

                                    <div class="dropdown-item cart-product">
                                        <div class="d-flex align-items-center">
                                            <div class="img">
                                                <img src="{{ asset('img/' . $item['attributes']['image']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                            </div>
                                            <div class="details d-flex justify-content-between">
                                                <div class="text"> 
                                                    <a href="#">
                                                        <strong>{{ $item['name'] }}</strong>
                                                    </a>
                                                    <small>Quantity: {{ $item['quantity'] }}</small>
                                                    <span class="price">${{ $item['price'] }}</span>
                                                </div>
                                                <div class="delete">
                                                    <a href="{{ url('shop/remove-item?id=' . $item['id']) }}">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- total price-->
                                    <div class="dropdown-item total-price d-flex justify-content-between">
                                        <span>Total</span>
                                        <strong class="text-primary">${{ Cart::getTotal() }}</strong>
                                    </div>

                                    <!-- call to actions-->
                                    <div class="dropdown-item CTA d-flex">
                                        <a href="{{ url('shop/checkout') }}" class="btn btn-template wide">View Cart</a>
                                        <a href="{{ url('order/address') }}" class="btn btn-template wide">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section-->
        <section class="hero hero-home no-padding">
            <!-- Hero Slider-->
            <div class="owl-carousel owl-theme hero-slider">
                <div style="background: url({{ asset('img/hero-bg.jpg') }});" class="item d-flex align-items-center has-pattern">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1>Aenean consequat</h1>
                                <p class="lead">ipsum sed facilisis aliquet, sapien tellus lobortis ligula, quis venenatis leo lectus non nisl. Mauris a augue at magna ultricies feugiat.</p>
                                <a href="{{ url('shop/all') }}" class="btn btn-template wide shop-now">Shop Now
                                    <i class="icon-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background: url({{ asset('img/hero-bg-2.jpg') }});" class="item d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 text-white">
                                <h1>Labore et dolore magna aliqua</h1>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ url('shop/all') }}" class="btn btn-template wide shop-now">Shop Now
                                    <i class="icon-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background: url({{ asset('img/hero-bg-3.jpg') }});" class="item d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 text-white">
                                <h1>Sed do eiusmod tempor</h1>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ url('shop/all') }}" class="btn btn-template wide shop-now">
                                    Shop Now<i class="icon-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section-->
        <section class="categories">
            <div class="container">
                <header class="text-center">
                    <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
                </header>
                <div class="row text-left">
                    @foreach($categories as $category)
                    <div class="col-lg-4">
                        <a href="{{ url('shop/' . $category['url']) }}">
                            <div style="background-image: url({{ asset('img/' . $category['image'])}});" class="item d-flex align-items-end">
                                <div class="content">
                                    <h3 class="h5">{{ $category['title'] }}</h3>
                                    <span>New Collection</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Men's Collection -->
        <section class="men-collection gray-bg">
            <div class="container">
                <header class="text-center">
                    <h2 class="text-uppercase"><small>Autumn Choice</small>Men Collection</h2>
                </header>
                <!-- Products Slider-->
                <div class="owl-carousel owl-theme products-slider">
                    <!-- item--> 
                    @foreach( $products[0] as $product )
                    <div class="item">
                        <div class="product is-gray">
                            <div class="image d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/'. $product['image']) }}" alt="{{ $product['title' ] }}" class="img-fluid">
                                <div class="hover-overlay d-flex align-items-center justify-content-center">
                                    <div class="CTA d-flex align-items-center justify-content-center">
                                        <span class="add-to-cart btn" data-id="{{ $product['id'] }}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <a href="{{ url('shop/item/' . $product['url']) }}" class="visit-product active">
                                            <i class="icon-search"></i>View
                                        </a>
                                        <!-- iteration -->
                                        <a href="" data-toggle="modal" data-target="#{{ $product['id'] }}" class="quick-view">
                                            <i class="fa fa-arrows-alt"></i>
                                        </a>
                                        <!-- /enditeration -->
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

        <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
        <!-- Footer-->
        <footer class="main-footer">
            <!-- Main Block -->
            <div class="main-block">
                <div class="container">
                    <div class="row">
                        <div class="info col-lg-4">
                            <div class="logo">
                                <img src="{{ asset('img/logo-robot-inverse.png') }}" alt="clothing-factory-logo" width="45">
                                <h6>Clothing Factory</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            <ul class="social-menu list-inline">
                                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <div class="site-links col-lg-2 col-md-6">
                            <h5 class="text-uppercase">Shop</h5>
                            <ul class="list-unstyled">
                                <li> <a href="{{ url('shop/women') }}">For Women</a></li>
                                <li> <a href="{{ url('shop/men') }}">For Men</a></li>
                                <li> <a href="#">Stores</a></li>
                                <li> <a href="#">Our Blog</a></li>
                                <li> <a href="{{ url('about') }}">About</a></li>
                                <li> <a href="{{ url('shop') }}">Shop</a></li>
                            </ul>
                        </div>
                        <div class="site-links col-lg-2 col-md-6">
                            <h5 class="text-uppercase">Company</h5>
                            <ul class="list-unstyled">
                                @if( ! Session::has('user_id'))
                                <li> <a href="{{ url('user/login') }}">Login</a></li>
                                @else
                                <li> <a href="{{ url('user/logout') }}">Logout</a></li>
                                @endif
                                <li> <a href="{{ url('user/register') }}">Register</a></li>
                                <li> <a href="#">Wishlist</a></li>
                                <li> <a href="#">Our Products</a></li>
                                <li> <a href="{{ url('shop/checkout') }}">Checkouts</a></li>
                            </ul>
                        </div>
                        <div class="newsletter col-lg-4">
                            <h5 class="text-uppercase">Daily Offers & Discounts</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                            <form action="#" id="newsletter-form">
                                <div class="form-group">
                                    <input type="email" name="subscribermail" placeholder="Your Email Address">
                                    <button type="submit"> <i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="text col-md-6">
                            <p>&copy; 2017 <a href="https://ondrejsvestka.cz" target="_blank">Ondrej Svestka </a> All rights reserved.</p>
                        </div>
                        <div class="payment col-md-6 clearfix">
                            <ul class="payment-list list-inline-item pull-right">
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/visa.svg') }}" alt="..."></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/mastercard.svg') }}" alt="..."></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/paypal.svg') }}" alt="..."></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/western-union.svg') }}" alt="..."></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Javascript files-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="{{ asset('lib/hub/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/hub/js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('lib/hub/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/hub/js/owl.carousel.thumb.min.js') }}"></script>
        <script src="{{ asset('lib/hub/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('lib/hub/js/nouislider.min.js') }}"></script>
        <script src="{{ asset('lib/hub/js/front.js') }}"></script>
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    </body>
</html>