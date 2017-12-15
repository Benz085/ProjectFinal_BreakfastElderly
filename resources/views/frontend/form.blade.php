@extends('layouts.nevber')
@section('head')
    <style>
        /*.bg-1 {*/
            /*!*background-color: #EEE0E5;*!*/
            /*border-style:solid;*/
            /*color: #ffffff;*/
            /*background: rgb(254,255,255); !* Old browsers *!*/
            /*background: -moz-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); !* FF3.6+ *!*/
            /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(238, 224, 229)), color-stop(100%, rgb(248, 254, 248))); !* Chrome,Safari4+ *!*/
            /*background: -webkit-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); !* Chrome10+,Safari5.1+ *!*/
            /*background: -o-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); !* Opera 11.10+ *!*/
            /*background: -ms-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); !* IE10+ *!*/
            /*background: linear-gradient(to bottom, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); !* W3C *!*/
            /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); !* IE6-9 *!*/
            /*!* ส่วนการแสดง ผล radius*!*/
            /*-webkit-border-radius: 5px;*/
            /*border-radius: 5px;*/
            /*!*สบ ส่วนการแสดง ผล radius*!*/
        /*}*/
        .menu-item {
            border: 1px solid #dadada;
            padding: 10px;
            margin: 0 0 30px 0;
            position: relative;
            background: #f5f5f5;
        }
        .menu-item:after {
            border: 1px solid #dadada;
            bottom: 10px;
            content: "";
            left: 10px;
            pointer-events: none;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1;
        }
        .menu-image {
            overflow: hidden;
            float: left;
            position: relative;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
        }
        .menu-heading ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .menu-heading ul li {
            padding: 0 0 20px 0;
            /*border-bottom: 1px dashed #dadada;*/
            margin: 0 0 30px 0;
        }
        .icon-text {
            overflow: hidden;
            padding: 0 0 0 22px;
        }
        .blog-wrap {
            border: 1px solid #dadada;
            padding: 20px;
            padding-bottom: 10px;
            margin: 0;
            position: relative;
            background: #f5f5f5;
            margin-top: 10px;
            width: 100%;
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
    <div class="container bg-1 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">
                    <h2>จัดสำรับอาหารเช้า <span class="violet">ผู้สูงวัย 61 - 69 ปี</span></h2>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 15px">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12 work-title wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;margin-right: 15px;" >
                                <h2>
                                    การแพ้อาหาร
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                            <div class="blog-wrap  hvr-ripple-in wow fadeInLeftBig animated"
                                 style="visibility: visible; animation-name: fadeInDown;">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                             style="height: 80px; width: 100%; display: block;"
                                             src="{{ asset("frontend/img/menu-thumb-1.jpg") }}"
                                             data-holder-rendered="true" data-lity>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption">
                                            <h5>ประเภทการแพ้อาหาร</h5>
                                            <a href="{{ url('recommend/getArticle/2') }}" class="btn btn-primary hvr-icon-forward" role="button">อ่าน </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap  hvr-ripple-in wow fadeInLeftBig animated"
                                 style="visibility: visible; animation-name: fadeInDown;">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                             style="height: 80px; width: 100%; display: block;"
                                             src="{{ asset("frontend/img/menu-thumb-1.jpg") }}"
                                             data-holder-rendered="true" data-lity>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption">
                                            <h5>ทำไมการแพ้อาหารจึงเป็นเรื่องที่สำคัญ</h5>
                                            <a href="{{ url('recommend/getArticle/1') }}" class="btn btn-primary hvr-icon-forward" role="button">อ่าน </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="margin-top: 30px;">
                    <div class="row">
                        <center>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="thumbnail hvr-wobble-horizontal" style="width: 100%;">
                                                    <h4 style="color: #411c0e">จัดสำรับอาหารเช้า ผู้สูงอายุ</h4>
                                                    <img  class="img-circle" style="width: 255px; height: 180px;" src="{{ asset("images/foodallergy/foodallergy.png") }}" data-holder-rendered="true">
                                                    <div class="caption">
                                                        <p>
                                                            <a href="{{ url('quiz/create') }}" class="btn btn-primary hvr-icon-forward" role="button">เริ่ม </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 testimonials-title wow fadeIn" style="margin-top: 60px">
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection