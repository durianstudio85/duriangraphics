@extends('layouts.app')

@section('content')
<div class="register-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/register-image.png') }}">
            </div>
            <div class="col-md-6">
                <h2>Register</h2>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Username" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7 col-sm-6 col-xs-6">
                            By creating an account you agree to our<br> 
                            <a href="#">Privacy Policy</a>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-6">
                            <button type="submit" class="btn btn-primary dg-register-submit">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <p><strong>Already have an account?</strong> <br>Sign in with your existing username and password. <a href="{{ url('/login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
</div>


@endsection
