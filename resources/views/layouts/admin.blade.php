<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Project') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="apple-touch-icon" href="apple-touch-icon.png">--}}
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('backend/css/vendor.css') }}">


    <link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/app-green.css') }}">
    <link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
    @yield('head')

</head>
@if (Auth::guest())
    <body class="loaded">
    <div class="app blank sidebar-opened">
        <article class="content">
            <div class="error-card global">
                <div class="error-title-block">
                    <h1 class="error-title">500</h1>
                    <h2 class="error-sub-title"> Internal Server Error. </h2>
                </div>
                <div class="error-container visible">
                    <p>กรุณาเข้าสู่ระบบ</p>
                    <a class="btn btn-primary" href="{{ url('login') }}">
                        <i class="fa fa-sign-in"></i>   เข้าสู่ระบบ
                    </a>
                </div>
            </div>
        </article>
    </div>
    </body>
@else
    <body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                <div class="header-block header-block-collapse hidden-lg-up">
                    <button class="collapse-btn" id="sidebar-collapse-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="header-block header-block-search hidden-sm-down">
                    <form role="search">
                        <div class="input-container"><i class="fa fa-search"></i> <input type="search"
                                                                                         placeholder="Search">
                            <div class="underline"></div>
                        </div>
                    </form>
                </div>
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <div class="img"
                                     style="background-image: url('{{ asset('images/profile/profile.jpg') }}')"></div>
                                <span class="name">
    			       {{ Auth::user()->name }}
    			    </span> </a>
                            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"><a
                                        class="dropdown-item" href="#">
                                    <i class="fa fa-user icon"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off icon"></i>
                                    ออกจากระบบ
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class="sidebar">
                <div class="sidebar-container">
                    <div class="sidebar-header">
                        <div class="brand" style="font-size:14px ">
                            {{--<div class="logo">--}}
                                {{--<span class="l l1"></span> <span class="l l2"></span>--}}
                                {{--<span class="l l3"></span> <span class="l l4"></span>--}}
                                {{--<span class="l l5"></span>--}}
                            {{--</div>--}}
                            ระบบการจัดการฐานข้อมูล
                        </div>
                    </div>
                    <nav class="menu">
                        <ul class="nav metismenu active" id="sidebar-menu">
                            <li>
                                <a href="{{ url('index') }}" target="_blank"><i class="fa fa-home"></i> หน้าเว็บไซต์หลัก </a>
                            </li>
                            <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}">
                                <a href="{{ url('home') }}"><i class="fa fa-home"></i> หน้าหลัก </a>
                            </li>
                            <li><a>
                                    <i class="fa fa-desktop"></i>แสดงผลข้อมูล<i class="fa arrow"></i>
                                </a>
                                <ul>
                                    <li><a href="{{ url('groupsfood') }}"> กลุ่มอาหาร</a></li>
                                    <li><a href="{{ url('menu') }}">เมนูอาหาร </a></li>
                                    <li><a href="{{ url('deck') }}"> สำรับอาหาร</a></li>
                                    <li><a href="{{ url('article') }}"> บทความ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-pencil-square-o"></i> เพิ่มข้อมูล<i class="fa arrow"></i></a>
                                <ul>
                                    <li><a href="{{ url('groupsfood/create') }}"> กลุ่มอาหาร</a></li>
                                    <li><a href="{{ url('menu/create') }}"> เมูนอาหาร</a></li>
                                    <li><a href="{{ url('home/view') }}">ตั้งค่าสำรับแพ้อาหาร</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('deck/create') }}"><i class="fa fa-cutlery"></i>
                                    การจัดการข้อมูลสำรับ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="sidebar-overlay" id="sidebar-overlay"></div>

            @yield('content')

            <footer class="footer">
                <div class="footer-block author">
                    <ul>
                        <li> created by <a href="#">Nattapong Thipbamrung</a></li>
                    </ul>
                </div>
            </footer>
            <div class="modal fade" id="modal-media">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">Media Library</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Insert Selected</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="modal fade" id="confirm-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure want to do this?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>

    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>

    <script src="{{ asset('backend/js/vendor.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>
    @yield('script')


    </body>
@endif


</html>