@extends('master')

@section('content')

<!-- Checout Forms-->
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nav nav-pills">
                    <h2 class="alternative-form-header">Register</h2>
                </div>
                <div class="tab-content">
                    <div id="address" class="active tab-block">
                        <form action="{{ url('user/register') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input id="firstname" type="text" name="first_name" placeholder="Enter you first name" class="form-control" value="{{ old('first_name') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input id="phone" type="text" name="phone" placeholder="Your phone number" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input id="lastname" type="text" name="last_name" placeholder="Enter your last name" class="form-control"  value="{{ old('last_name') }}">
                                </div>                                
                                <div class="form-group col-md-6">
                                    <label for="street" class="form-label">Street</label>
                                    <input id="street" type="text" name="address" placeholder="Your street name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" type="text" name="email" placeholder="enter your email address" class="form-control" value="{{ old('email') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="city" class="form-label">City</label>
                                    <input id="city" type="text" name="city" placeholder="Your city" class="form-control" value="{{ old('city') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="zip" class="form-label">ZIP</label>
                                    <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control" value="{{ old('zip') }}">
                                </div>                      
                                <div class="form-group col-md-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="con-password" class="form-label">Confirm</label>
                                    <input id="con-password" type="password" name="password_confirmation" placeholder="Confirm pass." class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="state" class="form-label">State</label>
                                    <input id="state" type="text" name="state" placeholder="Your state" class="form-control" value="{{ old('state') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input id="country" type="text" name="country" placeholder="Your country" class="form-control" value="{{ old('country') }}">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                <input class="btn btn-template wide next" type="submit" id="submit" name="submit" value="Sign up!">                           
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
