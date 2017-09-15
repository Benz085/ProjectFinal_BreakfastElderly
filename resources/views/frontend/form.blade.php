@extends('layouts.nevber')
@section('head')
    <style>
        .bg-1 {
            /*background-color: #EEE0E5;*/
            border-style:solid;
            color: #ffffff;
            background: rgb(254,255,255); /* Old browsers */
            background: -moz-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(238, 224, 229)), color-stop(100%, rgb(248, 254, 248))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); /* IE6-9 */
            /* ส่วนการแสดง ผล radius*/
            -webkit-border-radius: 5px;
            border-radius: 5px;
            /*สบ ส่วนการแสดง ผล radius*/
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
    <div class="container-fluid bg-1 text-center">
        <div class="container">
            {{--<div class="row">--}}
                {{--<div class="col-sm-12 testimonials-title wow fadeIn" style="margin-top: 60px">--}}
                  {{--<p style="font-size: 20px;color: #3a3a3a">ระบบสำรับอาหารเช้าผู้สูงอายุ </p>--}}
                {{--</div>--}}
            {{--</div>--}}
            <center>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('quiz/create') }}">
                                <img alt="140x140" data-src="holder.js/140x140" class="img-circle" style="width: 140px; height: 140px;" src="{{ asset("frontend/img/newscms.jpg") }}" data-holder-rendered="true">
                            </a>
                            <h4 style="color: #411c0e">จัดสำรับอาหาร</h4>
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
@endsection
@section('script')

@endsection