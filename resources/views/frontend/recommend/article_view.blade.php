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
                        บทความ
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-warning" style="margin-top:5px">
                    {{--<div class="panel-heading"></div>--}}
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr style="font-size: 15px">
                                <th width="25%">รูป</th>
                                <th>หัวข้อบทหวาน</th>
                                <th>ผู้ตั้งบทความ</th>
                                <th>ว/ด/ป</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr style="font-size: 15px">
                                <td>
                                    <a href="#" data-lity><img src="{{ asset("frontend/img/slider/1.jpg") }}" style="margin-left: -35px;"></a>
                                </td>
                                <td>ภูเก็ต</td>
                                <td>ชื่อ</td>
                                <td>วันที่ / เวลา</td>
                                <td>
                                    <a href="{{ url('#') }}"><button class="btn-change8">อ่านกระทู้</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" data-lity><img src="{{ asset("frontend/img/slider/1.jpg") }}" style="margin-left: -35px;"></a>
                                </td>
                                <td>ภูเก็ต</td>
                                <td>ชื่อ</td>
                                <td>วันที่ / เวลา</td>
                                <td>
                                    <a href="{{ url('#') }}"><button class="btn-change8">อ่านกระทู้</button></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection