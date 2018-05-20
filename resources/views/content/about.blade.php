@extends('master')

@section('content')
<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>About us</h1>
            </div>
            <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">About us</li>
            </ul>
        </div>
    </div>
</section>
<!-- about us-->
<section class="padding-small">
    <div class="container">
        <div class="row about-item">
            <div class="col-lg-8 col-sm-9">
                <h2>How it all began</h2>
                <p class="text-muted">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, `and what is the use of a book,' thought Alice `without pictures or conversation?' </p>
            </div>
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon ml-lg-0"><i class="fa fa-line-chart"></i></div>
            </div>
        </div>
        <div class="row about-item">
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon mr-lg-0"><i class="fa fa-user-o">                      </i></div>
            </div>
            <div class="col-lg-8 col-sm-9">
                <h2>Who we are</h2>
                <p class="text-muted">So she was considering in her own mind (as well as she could, for the hot day made her feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be worth the trouble of getting up and picking the daisies, when suddenly a White Rabbit with pink eyes ran close by her. </p>
            </div>
        </div>
        <div class="row about-item">
            <div class="col-lg-8 col-sm-9">
                <h2>We care</h2>
                <p class="text-muted">There was nothing so VERY remarkable in that; nor did Alice think it so VERY much out of the way to hear the Rabbit say to itself, `Oh dear! Oh dear! I shall be late!' (when she thought it over afterwards, it occurred to her that she ought to have wondered at this, but at the time it all seemed quite natural);</p>
            </div>
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon ml-lg-0"><i class="icon icon-heart"></i></div>
            </div>
        </div>
        <div class="row about-item">
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon mr-lg-0"><i class="icon icon-truck">                      </i></div>
            </div>
            <div class="col-lg-8 col-sm-9">
                <h2>Fast delivery</h2>
                <p class="text-muted">But when the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT- POCKET, and looked at it, and then hurried on, Alice started to her feet, for it flashed across her mind that she had never before seen a rabbit with either a waistcoat-pocket, or a watch to take out of it, and burning with curiosity, she ran across the field after it, and fortunately was just in time to see it pop down a large rabbit-hole under the hedge. </p>
            </div>
        </div>
        <div class="row about-item">
            <div class="col-lg-8 col-sm-9">
                <h2>Your security and privacy matters</h2>
                <p class="text-muted">In another moment down went Alice after it, never once considering how in the world she was to get out again. </p>
            </div>
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon ml-lg-0"><i class="icon icon-secure-shield"></i></div>
            </div>
        </div>
    </div>
</section>
@include('inc.divider')
<section class="padding-small">
    <div class="container">   
        <header>
            <h2 class="h1">Our team</h2>
            <p class="lead text-muted">The rabbit-hole went straight on like a tunnel for some way, and then dipped suddenly down, so suddenly that Alice had not a moment to think about stopping herself before she found herself falling down a very deep well.</p>
        </header>
        <div class="row team">
            <div class="col-md-3 col-6">
                <div class="team-member">
                    <div class="image"><img src="{{ asset('lib/hub/img/person-1.jpg') }}" alt="" class="img-fluid rounded-circle"></div>
                    <h3 class="h5"><a href="{{ url('about') }}">Mad Hatter</a></h3>
                    <p class="role">founder</p>
                    <div class="social"><a href="{{ url('about') }}" class="external facebook"><i class="fa fa-facebook"></i></a><a href="{{ url('about') }}" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="{{ url('about') }}" class="external twitter"><i class="fa fa-twitter"></i></a><a href="{{ url('about') }}" class="email"><i class="fa fa-envelope"></i></a></div>
                    <div class="text">
                        <p>If I had a world of my own, everything would be nonsense. Nothing would be what it is, because everything would be what it isn't. </p>
                    </div>
                </div>
                <!-- /.team-member            -->
            </div>
            <div class="col-md-3 col-6">
                <div class="team-member">
                    <div class="image"><img src="{{ asset('lib/hub/img/person-2.jpg') }}" alt="" class="img-fluid rounded-circle"></div>
                    <h3 class="h5"><a href="{{ url('about') }}">Cheshire Cat</a></h3>
                    <p class="role">CTO</p>
                    <div class="social"><a href="{{ url('about') }}" class="external facebook"><i class="fa fa-facebook"></i></a><a href="{{ url('about') }}" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="{{ url('about') }}" class="external twitter"><i class="fa fa-twitter"></i></a><a href="{{ url('about') }}" class="email"><i class="fa fa-envelope"></i></a></div>
                    <div class="text">
                        <p>“You just go where your high-top sneakers sneak, and don't forget to use your head.” </p>
                    </div>
                </div>
                <!-- /.team-member            -->
            </div>
            <div class="col-md-3 col-6">
                <div class="team-member">
                    <div class="image"><img src="{{ asset('lib/hub/img/person-3.jpg') }}" alt="" class="img-fluid rounded-circle"></div>
                    <h3 class="h5"><a href="{{ url('about') }}">Alice</a></h3>
                    <p class="role">Team Leader</p>
                    <div class="social"><a href="{{ url('about') }}" class="external facebook"><i class="fa fa-facebook"></i></a><a href="{{ url('about') }}" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="{{ url('about') }}" class="external twitter"><i class="fa fa-twitter"></i></a><a href="{{ url('about') }}" class="email"><i class="fa fa-envelope"></i></a></div>
                    <div class="text">
                        <p>Who in the world am I? Ah, that's the great puzzle..</p>
                    </div>
                </div>
                <!-- /.team-member            -->
            </div>
            <div class="col-md-3 col-6">
                <div class="team-member">
                    <div class="image"><img src="{{ asset('lib/hub/img/person-4.jpg') }}" alt="" class="img-fluid rounded-circle"></div>
                    <h3 class="h5"><a href="{{ url('about') }}">White Rabbit</a></h3>
                    <p class="role">Lead developer</p>
                    <div class="social"><a href="{{ url('about') }}" class="external facebook"><i class="fa fa-facebook"></i></a><a href="{{ url('about') }}" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="{{ url('about') }}" class="external twitter"><i class="fa fa-twitter"></i></a><a href="{{ url('about') }}" class="email"><i class="fa fa-envelope"></i></a></div>
                    <div class="text">
                        <p>If everybody minded their own business, the world would go around a great deal faster than it does.</p>
                    </div>
                </div>
                <!-- /.team-member            -->
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="main-footer">
    <!-- Service Block-->
    <div class="services-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icon-truck"></i></div>
                        <div class="text">
                            <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $300</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icon-coin"></i></div>
                        <div class="text">
                            <h6 class="no-margin text-uppercase">Money back guarantee</h6><span>30 Days Money Back Guarantee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icon-headphones"></i></div>
                        <div class="text">
                            <h6 class="no-margin text-uppercase">020-800-456-747</h6><span>24/7 Available Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection