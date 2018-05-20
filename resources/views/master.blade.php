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
        <!--<meta name="description" content="">-->
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:type" content="website" />
        <!--<meta property="og:url" content="http://www.imdb.com/title/tt0117500/" />-->
        <meta property="og:image" content="{{ asset('img/defualt.png') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:description" content="A demo website project as A final thesis - part of web development and web applications course in HackerU collage" />        
        <!--<meta name="robots" content="all,follow">-->        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap.min.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap.css') }}">-->
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/font-awesome.min.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('lib/hub/css/font-awesome.css') }}">-->
        <!-- Bootstrap Select -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap-select.min.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('lib/hub/css/bootstrap-select.css') }}">-->
        <!-- Price Slider Stylesheets -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/nouislider.css') }}">
        <!-- Custom font icons -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/custom-fonticons.css') }}">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/owl.carousel.min.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('lib/hub/css/owl.carousel.css') }}">-->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/owl.theme.default.min.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('lib/hub/css/owl.theme.default.css') }}">-->
        <!-- theme stylesheet -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/style.blue.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes -->
        <link rel="stylesheet" href="{{ asset('lib/hub/css/custom.css') }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/CFactory.ico') }}">
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
        @include('inc.ms')
        <!-- navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="search-area">
                    <div class="search-area-inner d-flex align-items-center justify-content-center">
                        <div class="close-btn">
                            <i class="icon-close"></i>
                        </div>
                        
                        <!-- Ajax search iteration -->
                        <form action="{{ url('') }}">
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
                        <ul class="navbar-nav mx-auto toggle">
                            <li class="nav-item">
                                <a href="{{ url('') }}" class="nav-link">Home</a>
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
                                    <li class="dropdown-item"><a href="{{ url('') }}">Profile</a></li>
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
                            <!-- Cart Dropdown -->
                            <div class="cart dropdown show">
                                <!-- cart item -->
                                <a id="cartdetails" href="{{ url('cart') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                    <i class="icon-cart"></i>
                                    <div class="cart-no">{{ Cart::getTotalQuantity() }}</div>
                                </a>
                                <a href="{{ url('shop/checkout') }}" class="text-primary view-cart">View Cart</a>
                                <div aria-labelledby="cartdetails" class="dropdown-menu">
                                    <!-- cart item -->
                                    @if( $cart = ($cartCollection = Cart::getContent())->toArray() )
                                    @foreach($cart as $item)
                                    <div class="dropdown-item cart-product">
                                        <div class="d-flex align-items-center">
                                            <div class="img">
                                                <img src="{{ asset('img/' . $item['attributes']['image']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                            </div>
                                            <div class="details d-flex justify-content-between">
                                                <div class="text"> 
                                                    <a href="{{ url('shop/item/' . $item['attributes']['url']) }}">
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
                                    <!-- total price -->
                                    <div class="dropdown-item total-price d-flex justify-content-between">
                                        <span>Total</span>
                                        <strong class="text-primary">${{ Cart::getTotal() }}</strong>
                                    </div>
                                    <!-- call to actions -->
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

        @yield('content')

        <div id="scrollTop">
            <i class="fa fa-long-arrow-up"></i>
        </div>
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
                                @include('inc.social')
                            </ul>
                        </div>
                        <div class="site-links col-lg-2 col-md-6">
                            <h5 class="text-uppercase">Shop</h5>
                            <ul class="list-unstyled">
                                <li> <a href="{{ url('shop/women') }}">For Women</a></li>
                                <li> <a href="{{ url('shop/men') }}">For Men</a></li>
                                <li> <a href="{{ url('') }}">Stores</a></li>
                                <li> <a href="{{ url('') }}">Our Blog</a></li>
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
                                <li> <a href="{{ url('') }}">Wishlist</a></li>
                                <li> <a href="{{ url('') }}">Our Products</a></li>
                                <li> <a href="{{ url('shop/checkout') }}">Checkouts</a></li>
                            </ul>
                        </div>
                        <div class="newsletter col-lg-4">
                            <h5 class="text-uppercase">Daily Offers & Discounts</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                            <form action="{{ url('') }}" id="newsletter-form">
                                <div class="form-group">
                                    <input type="text" name="subscribermail" placeholder="Your Email Address">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
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
                            <p>Clothing Factory &copy; {{ date('Y') }}</p>
                        </div>
                        <div class="payment col-md-6 clearfix">
                            <ul class="payment-list list-inline-item pull-right">
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/visa.svg') }}" alt="visa"></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/mastercard.svg') }}" alt="mastercard"></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/paypal.svg') }}" alt="paypal"></li>
                                <li class="list-inline-item"><img src="{{ asset('lib/hub/img/western-union.svg') }}" alt="western-union"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Javascript files-->
        @include('inc.scripts')
    </body>
</html>