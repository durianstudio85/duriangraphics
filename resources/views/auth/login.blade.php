@extends('layouts.app')

@section('content')
<div class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/login-image.png') }}">
            </div>
            <div class="col-md-6">
                <h2>Login</h2>
                <p>We create professional graphic designs that work for everyone.</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
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
                            <input id="password" type="password" placeholder="Password" class="form-control" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7 col-sm-6 col-xs-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" class="squaredThree"> Remember Me
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-6 col-xs-6">
                            <button type="submit" class="btn btn-primary dg-register-submit">
                                Login
                            </button>
                        </div>
                    </div>
                </form>

                
                    <hr>
                
                <div class="col-md-6">
                    <a href="{{ url('/register') }}">Not a member? Sign up</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/password/reset') }}" class="pull-right">Recover my password</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
