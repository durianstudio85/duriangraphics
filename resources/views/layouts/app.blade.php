<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if( Request::path() == '/')
        <title>Durian Graphics | Home </title>
    @else
        <title>Durian Graphics | {{ ucfirst(Request::path()) }} </title>
    @endif
    
    <link href="{{ asset('assets/images/favicon2.ico') }}" rel="shortcut icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/dg-logo.png') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <!-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/') }}" {{{ ( Request::is('/') ? 'class=active' : '') }}} >Home</a></li>
                    <li><a href="{{ url('/about') }}" {{{ ( Request::is('about') ? 'class=active' : '') }}} >About</a></li>
                    <li><a href="{{ url('/services') }}" {{{ ( Request::is('services') ? 'class=active' : '') }}} >Services</a></li>
                    <li><a href="{{ url('/pricing') }}" {{{ ( Request::is('pricing') ? 'class=active' : '') }}} >Pricing</a></li>
                    <li><a href="{{ url('/contact') }}" {{{ ( Request::is('contact') ? 'class=active' : '') }}} >Contact</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" {{{ ( Request::is('home') ? 'class=active' : '') }}} >Login</a></li>
                        <li><a href="{{ url('/register') }}" {{{ ( Request::is('register') ? 'class=active' : '') }}} >Register</a></li>
                    @else
                        <li class="dropdown pad-10">
                            <a href="#" class="dropdown-toggle user-login" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }}&nbsp;&nbsp; $0.00 &nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if( Request::path() == '/' || Request::path() == 'about' || Request::path() == 'services' || Request::path() == 'contact' || Request::path() == 'pricing' || Request::path() == 'login' || Request::path() == 'admin/login' || Request::path() == 'admin/register' || Request::path() == 'register' )
    <div class="dg-banner-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="dg-banner-h2">Over 100,000, Infographics, Themes, Vectors, Logos, and Artworks</h2>
                    <p class="dg-banner-p">Discover our huge collection of hand-reviewed graphic assets from our community of designers.</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-group dg-banner-input-group">
                                    <input type="text" class="form-control input-lg dg-banner-input" placeholder="Find logo, banner, artworks, etc....">
                                    <span class="input-group-btn gd-banner-button">
                                        <button class="btn btn-default btn-lg dg-banner-btn" type="button">SEARCH</button>
                                   </span>
                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                                </div>
                            </div>
                        </div>
                    </form>
                    @if( Request::path() == '/')
                    <center>
                        <img class="dg-banner-image" src="{{ asset('assets/images/dg-banner-image.png') }}">
                    </center>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    @yield('content')
    <div class="dg-footer-background">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/dg-logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <p class="dg-footer-logo-sub">Over 100,000, Infographics, Themes, Vectors, Logos, and Artworks</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3 class="footer-header">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique lectus et augue consequat volutpat. Nulla magna felis, mollis ut.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="footer-header">Need Help?</h3>
                    <ul class="footer-help">
                        <li><a href="">Help Center</a></li>
                        <li><a href="">Durian Graphic Terms</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="footer-header">Meet Durian Graphics</h3>
                    <ul class="footer-help">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Why Subscribe Us?</a></li>
                        <li><a href="">Durian Careers</a></li>
                    </ul>
                    <ul class="footer-icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="footer-header">Email Newsletters</h3>
                    <p>Sign up for new Envato content, updates, surveys & offers.</p>
                    <form class="form-group ">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn dg-footer-submit">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="dg-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© 2017 Durian Graphics. Trademarks and brands are the property of Durian Graphics</p>
                </div>
            </div>
        </div>
        
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
