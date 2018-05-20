<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Clo.Factory | 404</title> 
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
        <!-- Hero Section-->
        <section class="hero hero-page gray-bg padding-small">
            <div class="container">
                <h1>Page not found</h1>
            </div>
        </section>
        <!-- text page-->
        <section class="padding-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10">
                        <h2 class="text-superbig">404</h2>
                        <p class="lead">We don't know what happened but that <strong>page is not here</strong>.</p>
                        <p class="lead">Please <a href="{{ url('') }}" class="text-bold">start from the homepage</a>.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Javascript files-->
        @include('inc.scripts')
    </body>
</html>