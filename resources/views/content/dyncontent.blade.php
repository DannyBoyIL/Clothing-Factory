@extends('master')

@section('content')
<!-- Hero Section-->
@if( $contents )
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-9 order-2 order-md-1">
                <h1>{{ ltrim($title, 'Clo.Factory |') }}</h1>
                <p class="author-date-top">By <a href="{{ url('') }}">John Slim</a> |  January 16, 2016</p>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ ltrim($title, 'Clo.Factory |') }}</li>          
            </ul>
        </div>
    </div>
</section>
<!-- text page-->
<section class="padding-small">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                @foreach( $contents as $content )
                <header>
                    <p class="lead">{!! $content['article'] !!}</p>
                </header>
                <div class="text-content"> 
                    <p>
                        <img src="{{ asset('img/blog2.jpg') }}" alt="Example blog post alt" class="img-fluid">
                    </p>
                    <p>{!! $content['article'] !!}</p>
                    <h2>{{ $content['title'] }}</h2>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>
                    <blockquote class="blockquote blockquote-primary">{!! $content['article'] !!}</blockquote>
                    <p>
                        <img src="{{ asset('img/blog1.jpg') }}" alt="Example blog post alt" class="img-fluid">
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@else
@include('inc.oops')
@endif
@endsection