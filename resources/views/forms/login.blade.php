@extends('master')

@section('content')

<!-- Checout Forms-->
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nav nav-pills">
                    <h2 class="alternative-form-header">Login</h2>
                </div>
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
            @include('inc.signError')
        </div>
    </div>
</section>
@endsection
