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
    {{--<link rel="shortcut icon" href="{{ asset('frontend/ico/favicon.ico') }}">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/ico/apple-touch-icon-144-precomposed.png') }}">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/ico/apple-touch-icon-114-precomposed.png') }}">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/ico/apple-touch-icon-72-precomposed.png') }}">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/ico/apple-touch-icon-57-precomposed.png') }}">--}}

    <link href="{{ asset('frontend/css/lity.min.css') }}" rel="stylesheet">
    {{--Hover--}}
    <link href="{{ asset('frontend/hover/css/hover.css') }}" rel="stylesheet" media="all">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">

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
            {{--<a class="navbar-brand" href="{{ url('index') }}"></a>--}}
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::segment(1) === 'index' ? 'active' : null }} hvr-pulse-shrink">
                    <a href="{{ url('index') }}"><i class="fa fa-home"></i><br>หน้าหลัก</a>
                </li>
                <li class="{{ Request::segment(1) === 'recommend' ? 'active' : null }} hvr-pulse-shrink">
                    <a href="{{ url('recommend/index') }}"><i class="glyphicon glyphicon-apple"></i><br>สาระเกี่ยวกับผู้สูงวัย</a>
                </li>
                <li class="{{ Request::segment(1) === 'quiz' ? 'active' : null  }} hvr-pulse-shrink">
                    <a href="{{ url('quiz/form') }}"><i class="glyphicon glyphicon-cutlery"></i><br>จัดสำรับอาหารเช้า</a>
                </li>
                @if (Auth::guest())
                    <li class="{{ Request::segment(1) === 'login' ? 'active' : null  }} hvr-pulse-shrink">
                        <a href="{{ url('login') }}"><i class="glyphicon glyphicon-log-in"></i><br>เข้าสู่ระบบ</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'register' ? 'active' : null  }} hvr-pulse-shrink">
                        <a href="{{ route('register') }}"><i class="glyphicon glyphicon-log-in"></i><br>สมัตรสมาชิก</a>
                    </li>

                    @else
                    <li class="dropdown {{ Request::segment(1) === 'profile' ? 'active' : null  }}">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                            <i class="glyphicon glyphicon-user"></i><br>{{ Auth::user()->name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('profile/'.Auth::user()->id) }}">ข้อมูลส่วนตัว</a></li>
                            {{--<li><a href="{{ url('profile/create') }}">เพิ่มข้อมูลเรื่องโรค</a></li>--}}
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">ออกจากะบบ</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
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
            </div>
            <div class="col-sm-4 footer-box wow fadeInUp">
                <h4>เกี่ยวกับ</h4>
                <div class="footer-box-text">
                    <p>
                    </p>
                    <p><a href="#">Read more...</a></p>
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
<script src="{{ asset('frontend/js/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('frontend/js/jquery.ui.map.min.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>


<script src="{{ url('frontend/js/lity.min.js') }}"></script>


@yield('script')
</body>

</html>