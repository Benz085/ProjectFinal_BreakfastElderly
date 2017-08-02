<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--<link rel="apple-touch-icon" href="apple-touch-icon.png">--}}
<!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('backend/css/vendor.css') }}">
    <!-- Theme initialization -->
    {{--<script>--}}
    {{--var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :--}}
    {{--{};--}}
    {{--var themeName = themeSettings.themeName || '';--}}
    {{--if (themeName) {--}}
    {{--document.write('<link rel="stylesheet" id="theme-style" href="{{ asset("backend/css/app- '+ themeName + '.css") }}">');--}}
    {{--}--}}
    {{--else {--}}
    {{--document.write('<link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/app.css') }}">');--}}
    {{--}--}}
    {{--</script>--}}
    <link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/app.css') }}">
    <link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/app-green.css') }}">
</head>

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
                    <div class="input-container"><i class="fa fa-search"></i> <input type="search" placeholder="Search">
                        <div class="underline"></div>
                    </div>
                </form>
            </div>
            <div class="header-block header-block-nav">
                <ul class="nav-profile">
                    <li class="notifications new"><a href="" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <sup>
                                <span class="counter">8</span>
                            </sup>
                        </a>
                        <div class="dropdown-menu notifications-dropdown-menu">
                            <ul class="notifications-container">
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url({{ asset('backend/assets/faces/3.jpg') }})"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Zack Alien</span> pushed new commit: <span
                                                        class="accent">Fix page load performance issue</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url({{ asset('backend/assets/faces/5.jpg') }})"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Amaya Hatsumi</span> started new task: <span
                                                        class="accent">Dashboard UI design.</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url({{ asset('backend/assets/faces/8.jpg') }})"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Andy Nouman</span> deployed new version of <span
                                                        class="accent">NodeJS REST Api V3</span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer>
                                <ul>
                                    <li><a href="">
                                            View All
                                        </a></li>
                                </ul>
                            </footer>
                        </div>
                    </li>
                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <div class="img"
                                 style="background-image: {{ asset('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40') }})"></div>
                            <span class="name">
    			       {{ Auth::user()->name }}
    			    </span> </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"><a
                                    class="dropdown-item" href="#">
                                <i class="fa fa-user icon"></i>
                                Profile
                            </a> <a class="dropdown-item" href="#">
                                <i class="fa fa-bell icon"></i>
                                Notifications
                            </a> <a class="dropdown-item" href="#">
                                <i class="fa fa-gear icon"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-power-off icon"></i>
                                Logout
                            </a></div>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="brand" style="font-size:14px ">
                        <div class="logo">
                            <span class="l l1"></span> <span class="l l2"></span>
                            <span class="l l3"></span> <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div>
                        ระบบการจัดการฐานข้อมูล
                    </div>
                </div>
                <nav class="menu">
                    <ul class="nav metismenu" id="sidebar-menu">
                        <li class="active">
                            <a href="#"><i class="fa fa-home"></i> หน้าเว็บไซต์หลัก </a>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-home"></i> หน้าหลัก </a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-pencil-square-o"></i> เพิ่มข้อมูล<i class="fa arrow"></i></a>
                            <ul>
                                <li><a href="#"> กลุ่มอาหาร</a></li>
                                <li><a href="#"> เมูนอาหาร</a></li>
                            </ul>
                        </li>
                        <li><a href="">
                                <i class="fa fa-desktop"></i>แสดงผลข้อมูล<i class="fa arrow"></i>
                            </a>
                            <ul>
                                <li><a href="#"> กลุ่มอาหาร</a></li>
                                <li><a href="#">เมนูอาหาร </a></li>
                                <li><a href="#"> สำรับอาหาร</a></li>
                                <li><a href="#">ข้อมูล #HashTag twitter</a></li>
                                <li><a href="#"> ข้อมูลคะแนนให้อาหาร</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cutlery"></i> การจัดการข้อมูลสำรับ</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <footer class="sidebar-footer">
                <footer class="sidebar-footer">
                    <ul class="nav metismenu" id="customize-menu">
                        <li>
                            <ul>
                                <li class="customize">
                                    <div class="customize-item">
                                        <div class="row customize-header">
                                            <div class="col-xs-4"></div>
                                            <div class="col-xs-4"><label class="title">fixed</label></div>
                                            <div class="col-xs-4"><label class="title">static</label></div>
                                        </div>
                                        <div class="row hidden-md-down">
                                            <div class="col-xs-4"><label class="title">Sidebar:</label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="sidebarPosition"
                                                           value="sidebar-fixed">
                                                    <span></span>
                                                </label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="sidebarPosition" value="">
                                                    <span></span>
                                                </label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4"><label class="title">Header:</label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="headerPosition"
                                                           value="header-fixed">
                                                    <span></span>
                                                </label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="headerPosition" value="">
                                                    <span></span>
                                                </label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4"><label class="title">Footer:</label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="footerPosition"
                                                           value="footer-fixed">
                                                    <span></span>
                                                </label></div>
                                            <div class="col-xs-4"><label>
                                                    <input class="radio" type="radio" name="footerPosition" value="">
                                                    <span></span>
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="customize-item">
                                        <ul class="customize-colors">
                                            <li><span class="color-item color-red" data-theme="red"></span></li>
                                            <li><span class="color-item color-orange" data-theme="orange"></span></li>
                                            <li><span class="color-item color-green active" data-theme=""></span></li>
                                            <li><span class="color-item color-seagreen" data-theme="seagreen"></span>
                                            </li>
                                            <li><span class="color-item color-blue" data-theme="blue"></span></li>
                                            <li><span class="color-item color-purple" data-theme="purple"></span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <a href="">
                                <i class="fa fa-cog"></i> ตั้งค่า
                            </a></li>
                    </ul>
                </footer>
            </footer>
        </aside>
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <article class="content dashboard-page">
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 stats-col">
                        <div class="card sameheight-item stats" data-exclude="xs">
                            <div class="card-block">
                                <div class="title-block">
                                    <h4 class="title"> Stats </h4>
                                    <p class="title-description"> Website metrics for <a
                                                href="http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/">
                                            your awesome project
                                        </a></p>
                                </div>
                                <div class="row row-sm stats-container">
                                    <div class="col-xs-12 col-sm-6 stat-col">
                                        <div class="stat-icon"><i class="fa fa-rocket"></i></div>
                                        <div class="stat">
                                            <div class="value"> 5407</div>
                                            <div class="name"> Active items</div>
                                        </div>
                                        <progress class="progress stat-progress" value="75" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 75%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 stat-col">
                                        <div class="stat-icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="stat">
                                            <div class="value"> 78464</div>
                                            <div class="name"> Items sold</div>
                                        </div>
                                        <progress class="progress stat-progress" value="25" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 25%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                    <div class="col-xs-12 col-sm-6  stat-col">
                                        <div class="stat-icon"><i class="fa fa-line-chart"></i></div>
                                        <div class="stat">
                                            <div class="value"> $80.560</div>
                                            <div class="name"> Monthly income</div>
                                        </div>
                                        <progress class="progress stat-progress" value="60" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 60%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                    <div class="col-xs-12 col-sm-6  stat-col">
                                        <div class="stat-icon"><i class="fa fa-users"></i></div>
                                        <div class="stat">
                                            <div class="value"> 359</div>
                                            <div class="name"> Total users</div>
                                        </div>
                                        <progress class="progress stat-progress" value="34" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 34%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                    <div class="col-xs-12 col-sm-6  stat-col">
                                        <div class="stat-icon"><i class="fa fa-list-alt"></i></div>
                                        <div class="stat">
                                            <div class="value"> 59</div>
                                            <div class="name"> Tickets closed</div>
                                        </div>
                                        <progress class="progress stat-progress" value="49" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 49%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 stat-col">
                                        <div class="stat-icon"><i class="fa fa-dollar"></i></div>
                                        <div class="stat">
                                            <div class="value"> $780.064</div>
                                            <div class="name"> Total income</div>
                                        </div>
                                        <progress class="progress stat-progress" value="15" max="100">
                                            <div class="progress">
                                                <span class="progress-bar" style="width: 15%;"></span>
                                            </div>
                                        </progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @yield('content')
        </article>
        <footer class="footer">
            <div class="footer-block author">
                <ul>
                    <li> created by <a href="https://github.com/modularcode">ModularCode</a></li>
                    <li><a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a></li>
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
                    <div class="modal-body modal-tab-container">
                        <ul class="nav nav-tabs modal-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                            </li>
                            <li class="nav-item"><a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                            </li>
                        </ul>
                        <div class="tab-content modal-tab-content">
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="images-container">
                                    <div class="row"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                <div class="upload-container">
                                    <div id="dropzone">
                                        <form action="/" method="POST" enctype="multipart/form-data"
                                              class="dropzone needsclick dz-clickable" id="demo-upload">
                                            <div class="dz-message-block">
                                                <div class="dz-message needsclick"> Drop files here or click to
                                                    upload.
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</body>

</html>