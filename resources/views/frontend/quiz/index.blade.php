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

    <div class="container-fluid" style="margin-top: 15px">

        <div class="col-md-12">
            <div class="row">
                <div class="team-title wow fadeIn" style="margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        สำรับอาหาร
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div style="margin-top: 15px">
                <div class="col-md-5">
                    <div class="menu-item">
                        <h2>โภชนาการอาหาร</h2>
                    </div>
                    <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php
                                $charts = [

                                    'chart' => [
                                        'type' => 'pie',
                                        'borderWidth' => 1,
                                        'borderRadius' => 5,
                                        'options3d' => [
                                            'enabled' =>  true,
                                            'alpha'=> 45,
                                            'beta' =>0,

                                        ]
                                    ],
                                    'title' => ['text' => 'ข้อมูลแคลอรีของอาหารเช้า'],
                                    'subtitle' =>['text' => 'Benzny@DEv'],
                                    'legend' =>[
                                        'align' => 'right',
                                        'verticalAlign' => 'middle',
                                        'layout' => 'vertical',
                                        'borderWidth' => 1,
                                    ],
                                    'plotOptions' =>[
                                        'pie' => [
                                            'showInLegend' =>  true,
                                            'allowPointSelect' => true,
                                            'cursor' =>'pointer',
                                            'depth'=> 40,
                                        ],
                                    ],
                                    'series' => [
                                        [
                                            'name' => 'Reza',
                                            'data' => [1,2],
                                            'dataLabels' =>[
                                                'enabled' => true,
                                            ]
                                        ],
                                    ]
                                ];

                                echo Chart::display("id-highchartsnya", $charts);

                                ?>
                                <hr>
                                ข้อมูล
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="menu-item">
                        <h2>สำรับอาหาร :  มื้อเช้า</h2>
                    </div>
                    <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @foreach($decks as $data)
                                    <ul>
                                        <li>
                                            <div class="col-md-8">
                                                <div class="menu-image" style="margin-top: 10px">
                                                    <img class="" alt=""
                                                         src="{{ asset("frontend/img/menu-thumb-1.jpg") }}">
                                                </div>
                                                <div class="icon-text">
                                                    <h4 align="left">ชื่อ : {{ $data->Menu_Name }}</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{url('quiz/'.$data->ID_Menu)}}">
                                                    <button href="#" class="btn-change8">ดูข้อมูล >></button>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    @endsection