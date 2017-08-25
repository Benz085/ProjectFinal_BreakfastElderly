<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ระบบแนะนำอาหารเช้าผู้สูงอายุ') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/form-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/media-queries.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{ asset('frontend/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/ico/apple-touch-icon-57-precomposed.png') }}">

</head>

<body>

<!-- Top menu -->
<nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Andia - a super cool design agency...</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                        <i class="fa fa-home"></i><br>Home <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Home 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-camera"></i><br>Portfolio</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tasks"></i><br>Services</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i><br>About</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i><br>Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                        <i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Pricing tables</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 footer-box wow fadeInUp">
                <h4>About Us</h4>
                <div class="footer-box-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    </p>
                    <p><a href="#">Read more...</a></p>
                </div>
            </div>
            <div class="col-sm-3 footer-box wow fadeInDown">
                <h4>Email Updates</h4>
                <div class="footer-box-text footer-box-text-subscribe">
                    <p>Enter your email and you'll be one of the first to get new updates:</p>
                    <form role="form" action="#" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">Email address</label>
                            <input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
                        </div>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                    <p class="success-message"></p>
                    <p class="error-message"></p>
                </div>
            </div>
            <div class="col-sm-3 footer-box wow fadeInUp">
                <h4>Flickr Photos</h4>
                <div class="footer-box-text flickr-feed"></div>
            </div>
            <div class="col-sm-3 footer-box wow fadeInDown">
                <h4>Contact Us</h4>
                <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                    <p><i class="fa fa-phone"></i> Phone: 0039 333 12 68 347</p>
                    <p><i class="fa fa-user"></i> Skype: Andia_Agency</p>
                    <p><i class="fa fa-envelope"></i> Email: <a href="">contact@andia.co.uk</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 wow fadeIn">
                <div class="footer-border"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 footer-copyright wow fadeIn">
                <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com/free-bootstrap-themes-templates/">Azmind</a>.</p>
            </div>
            <div class="col-sm-5 footer-social wow fadeIn">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/retina-1.1.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('frontend/js/flickrfeed.min.js') }}"></script>
<script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('frontend/js/jquery.ui.map.min.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>

@yield('script')
</body>

</html>