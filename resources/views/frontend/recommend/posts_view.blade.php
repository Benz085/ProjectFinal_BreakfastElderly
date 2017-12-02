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
        .comment-wrap{
            margin:0 0 10px 41px;
            padding:20px;
            border-bottom:1px solid #d6d7d9;
            background:#f5f5f5;
        }
        .comment-wrap p{
            margin:0;
        }
        .comment-wrap:last-child{
            border:none;
            margin:0 0 0 41px;
            padding-bottom:0;
        }
        .comment-wrap.reply-comment{
            margin-left:120px;
        }
        .comment-thumb{
            margin:0 0 20px -75px;
            float:left;
        }
        .comment-thumb img{
            float:left;
            border:4px solid #FFF;
            width:90px;
            display:table-cell;
            vertical-align:middle;
            margin-top: -15px;
            border-radius:50%;
            -webkit-border-radius:50%;
            -moz-border-radius:50%;
        }
        .comment-wrap .icon-text h4{
            margin:17px 0 20px 0;
            font-weight:400;
            color:#56beb8;
            float:left;
        }
        .comment-wrap .icon-text h4 span{
            color:#333;
        }
        .comment-wrap .icon-text small{
            color:#999;
            margin-top:8px;
            display:block;
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

    <div class="container" style="margin-top: 15px">
        <div class="col-md-12">
            <div class="row">
                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        กระทู้สนทนา
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="panel panel-warning" style="margin-top:5px">
                        {{--<div class="panel-heading"></div>--}}
                        <div class="panel-body">
                            <div class="comment-wrap">
                                <div class="comment-thumb">
                                    <img src="{{ asset("frontend/img/testi1.png") }}" alt="">
                                </div>
                                <div class="icon-text">
                                    <h4>Brad Thomos <span>says:</span><small>August 26, 2015 | 10:20 PM</small></h4>
                                </div>
                                <div align="right">
                                    <a href="{{ url('#') }}"><button class="btn-change8">อ่านกระทู้</button></a>
                                </div>
                            </div>
                            <div class="comment-wrap">
                                <div class="comment-thumb">
                                    <img src="{{ asset("frontend/img/testi1.png") }}" alt="">
                                </div>
                                <div class="icon-text">
                                    <h4>Brad Thomos <span>says:</span><small>August 26, 2015 | 10:20 PM</small></h4>
                                </div>
                                <div align="right">
                                    <a href="{{ url('#') }}"><button class="btn-change8">อ่านกระทู้</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
@section('script')

@endsection