@extends('master')

@section('content')

<!-- Hero Section-->
@if($categories)
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-9 order-2 order-md-1">
                <h1>{{ ltrim($title, 'Clo.Factory |') }}</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ ltrim($title, 'Clo.Factory |') }}</li>
            </ul>
        </div>
    </div>
</section>
<main>
    <!-- Categories Section-->
    <section class="categories">
        <div class="container">
            <header class="text-center">
                <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
            </header>
            <div class="row text-left">
                @foreach($categories as $category)
                <div class="col-lg-4 categories">
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
    @include('inc.brands')
</main>
@else
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
                <p class="lead">Please <a href="" class="search text-bold">use search</a> or <a href="{{ url('') }}" class="text-bold">start from the homepage</a>.</p>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
