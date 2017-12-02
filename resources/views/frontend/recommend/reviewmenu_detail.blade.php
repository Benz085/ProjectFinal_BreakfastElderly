@extends('layouts.nevber')
@section('head')
    <style>
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

        img {
            max-width: 90%;
        }

        .btn-change8 {
            height: 30px;
            width: 90px;
            background: lightseagreen;
            margin: 20px;
            /*float: left;*/
            border: 0px;
            color: #fff;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition-duration: 0.5s;
            -webkit-transition-timing-function: linear;
            box-shadow: 0px 0 0 #31708f inset;
        }

        .btn-change8:hover {
            -webkit-box-shadow: -100px 0 0 #31708f inset;
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
        .shop-img {
            border: 3px solid #FFF;
        }
        .item-rate {
            display: inline-block;
            color: #56beb8;
            padding: 3px 0;
            margin-left: 10px;
        }
    </style>

@endsection
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {{--<a><i class="glyphicon glyphicon-cutlery"></i></a>--}}
                    {{--<h1>ระบบสำรับอาหารเช้าผู้สูงอายุ</h1>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 15px">
        <div class="col-md-12">
            <div class="row">
                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        รีวิวอาหารเช้า
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                    <p>รายละเอียด</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="shop-img">
                        <img src="{{ asset("frontend/img/portfolio/work8.jpg") }}" alt="">
                    </div>
                </div>
                <div class="col-sm-6" align="left">
                    <h2>ชื่อเมนู</h2>
                    <div class="item-rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o dark"></i>
                    </div>
                    <hr>
                    <h3>ส่วนประกอบ</h3>
                    <div class="col-sm-3">
                        <p>ชื่อส่วนประกอบ</p>
                    </div>
                    <div class="col-sm-3">
                        <p>อัตราส่วน</p>
                    </div>
                    <br>
                    <hr>
                    <h3>วิธีทำ</h3>
                    <div class="col-sm-6">
                        <p>ปรุง<p>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
@endsection
@section('script')

@endsection