@extends('layouts.nevber')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <style>
        /*  bhoechie tab */
        div.bhoechie-tab-container {
            z-index: 10;
            background-color: #ffffff;
            padding: 0 !important;
            border-radius: 4px;
            -moz-border-radius: 4px;
            border: 1px solid #ddd;
            margin-top: 20px;
            margin-left: 50px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            background-clip: padding-box;
            opacity: 0.97;
            filter: alpha(opacity=97);
        }

        div.bhoechie-tab-menu {
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
        }

        div.bhoechie-tab-menu div.list-group {
            margin-bottom: 0;
        }

        div.bhoechie-tab-menu div.list-group > a {
            margin-bottom: 0;
        }

        div.bhoechie-tab-menu div.list-group > a .glyphicon,
        div.bhoechie-tab-menu div.list-group > a .fa {
            color: #5A55A3;
        }

        div.bhoechie-tab-menu div.list-group > a:first-child {
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }

        div.bhoechie-tab-menu div.list-group > a:last-child {
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }

        div.bhoechie-tab-menu div.list-group > a.active,
        div.bhoechie-tab-menu div.list-group > a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group > a.active .fa {
            background-color: #5A55A3;
            background-image: #5A55A3;
            color: #ffffff;
        }

        div.bhoechie-tab-menu div.list-group > a.active:after {
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            margin-top: -13px;
            border-left: 0;
            border-bottom: 13px solid transparent;
            border-top: 13px solid transparent;
            border-left: 10px solid #5A55A3;
        }

        div.bhoechie-tab-content {
            background-color: #ffffff;
            /* border: 1px solid #eeeeee; */
            padding-left: 20px;
            padding-top: 10px;
        }

        div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
            display: none;
        }

        .blog-wrap2 {
            border: 1px solid #dadada;
            padding-bottom: 10px;
            margin: 0;
            position: relative;
            background: #f5f5f5;
            margin-top: 10px;
        }

        .btn-change8 {
            height: 40px;
            width: 90px;
            background: #31708f;
            margin: 20px;
            /*float: left;*/
            border: 0px;
            color: #fff;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition-duration: 0.5s;
            -webkit-transition-timing-function: linear;
            box-shadow: 0px 0 0 lightseagreen inset;
        }

        .btn-change8:hover {
            -webkit-box-shadow: -100px 0 0 lightseagreen inset;
        }
    </style>

@endsection
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <a><i class="glyphicon glyphicon-cutlery"></i></a>
                    <h1>ระบบสำรับอาหารเช้าผู้สูงอายุ</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 15px">
        <div class="col-md-12">
            <div class="row">
                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        เมนูอาหารเช้า
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container"
                         style="margin-bottom: 20px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                            <div class="list-group">
                                @foreach($groupfood as $value)
                                    <a href="#" class="list-group-item text-center">
                                        <h4 class="glyphicon glyphicon-cutlery"></h4><br/>{{$value->food_name}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">
                                @foreach($groupfood1 as $value)
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                    data-holder-rendered="true"
                                                                    style="height: 200px; width: 100%; display: block;">
                                            <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                <p>
                                                    <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- train section -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood2 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>

                            <!-- hotel search -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood3 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood4 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood5 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood6 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood7 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood8 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img  src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                    @foreach($groupfood9 as $value)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail"><img src="{{ asset("backend/images/".$value->Menu_Image) }}"
                                                                        data-holder-rendered="true"
                                                                        style="height: 200px; width: 100%; display: block;">
                                                <div class="caption"><h3>{{ $value->Menu_Name }}</h3>
                                                    <p>
                                                        <a href="{{ url('reviewMenu/'.$value->ID_Menu) }}" class="btn btn-primary" role="button" style="margin-top: 20px;">ดูข้อมูล</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>>
                                    @endforeach
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
        });
    </script>
@endsection