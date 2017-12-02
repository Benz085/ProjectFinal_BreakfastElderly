@extends('layouts.nevber')
@section('head')

    <style>
        p {
            font-size: 18px;
        }

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
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 15px">

        <div class="col-md-12">
            <div class="row">
                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        เมนูอาหาร
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div style="margin-top: 15px">
                <div class="col-md-12">
                    @if( $menuDetail->ID_Food_Group  == 8)
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="shop-img">
                                                <img src="{{ asset("frontend/img/portfolio/work8.jpg") }}" alt=""  data-lity>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" align="left">
                                            <h2>{{ $menuDetail->Menu_Name }}</h2>
                                            <p>จำนวนชิ้น</p>
                                            <hr>
                                            <h3>โภชนาการ</h3>
                                            <div class="col-sm-3">
                                                <p>data</p>
                                                <p>data</p>
                                                <p>data</p>
                                                <p>data</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p>data</p>
                                                <p>data</p>
                                                <p>data</p>
                                                <p>data</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="shop-img">
                                            <img src="{{ asset("frontend/img/portfolio/work8.jpg") }}" alt=""  data-lity>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" align="left">
                                        <h2>{{ $menuDetail->Menu_Name }}</h2>
                                        <p></p>
                                        <hr>
                                        <h3>ส่วนประกอบ</h3>
                                        <div class="col-sm-3">
                                            @foreach($compositionDetail as $dataName)
                                                <p>{{ $dataName->composition_Name }}</p>
                                            @endforeach
                                        </div>
                                        <div class="col-sm-3">
                                            @foreach($compositionDetail as $dataComposition)
                                                <p>{{ $dataComposition->composition_ratio }}</p>
                                            @endforeach
                                        </div>
                                        <div class="col-sm-2" align="right">
                                            @foreach($compositionDetail as $dataComposition)
                                                <p>ดู</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                                        วิธีทำ
                                        <i class="glyphicon glyphicon-cutlery"></i>
                                    </h2>
                                </div>
                                <div class="col-sm-12">
                                    <p>ปรุง
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection