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
    @yield('head')
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
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="{{ url('index') }}"><i class="fa fa-home"></i><br>หน้าหลัก</a>
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class="glyphicon glyphicon-apple"></i><br>เกร็ดความรู้</a>
                </li>
                <li>
                    <a href="{{ url('form') }}"><i class="glyphicon glyphicon-cutlery"></i><br>ระบบแนะนำอาหารเช้า</a>
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class="fa fa-user"></i><br>ผู้จัดทำ</a>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                        <i class="glyphicon glyphicon-log-in"></i><br>เข้าสู่ระบบ <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('login') }}" target="_blank">ระบบการจัดการฐานข้อมูล</a></li>
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
            <div class="col-sm-4 footer-box wow fadeInUp">
                <h4>เกี่ยวกับ</h4>
                <div class="footer-box-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    </p>
                    <p><a href="#">Read more...</a></p>
                </div>
            </div>
            <div class="col-sm-4 footer-box wow fadeInDown">
                <h4>Email</h4>
                <div class="footer-box-text footer-box-text-subscribe">
                    <p>ป้อนอีเมลของคุณและคุณจะเป็นหนึ่งในคนแรกที่ได้รับการอัปเดตใหม่ ๆ :</p>
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
            <div class="col-sm-4 footer-box wow fadeInDown">
                <h4>ติดต่อผู้จัดทำ</h4>
                <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> Address :  มหาวิทยาลัยราชภัฏสวนสุนันทา , ถนน อู่ทองนอก แขวง วชิรพยาบาล เขต ดุสิต กรุงเทพมหานคร 10300</p>
                    <p><i class="fa fa-phone"></i> Phone :  080 958 3708</p>
                    <p><i class="fa fa-user"></i> Fackbook  :  Nattapong Thipbamrung</p>
                    <p><i class="fa fa-envelope"></i> Email :  s57122201085@ssru.ac.th </p>
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
                <p>Copyright 2017 Project - Computer Science. 57 by <a href="https://www.facebook.com/nattapong.thipbamrung">Nattapong Thipbamrung</a>.</p>
            </div>
            <div class="col-sm-5 footer-social wow fadeIn">
                <a href="https://www.facebook.com/nattapong.thipbamrung" target="_blank"><i class="fa fa-facebook"></i></a>
                {{--<a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>--}}
                <a href="https://twitter.com/BEnzny_cs29" target="_blank"><i class="fa fa-twitter"></i></a>
                {{--<a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>--}}
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