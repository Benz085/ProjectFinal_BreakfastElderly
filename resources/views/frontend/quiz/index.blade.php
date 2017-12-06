@extends('layouts.nevber')
@section('head')
    {{--buttons--}}
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <style>
        .menu-item {
            border: 1px solid #dadada;
            padding: 10px;
            margin: 0 0 30px 0;
            position: relative;
            background: #f5f5f5;
            width: 60%;
            margin: auto;
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
            max-width: 100%;
            margin-top: -10px;
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

        a.button4 {
             display: inline-block;
             padding: 0.3em 1.2em;
             margin: 0 0.1em 0.1em 0;
             border: 0.16em solid rgba(255, 255, 255, 0);
             border-radius: 2em;
             box-sizing: border-box;
             text-decoration: none;
             font-family: 'Roboto', sans-serif;
             font-weight: 300;
             color: #FFFFFF;
             text-shadow: 0 0.04em 0.04em rgba(0, 0, 0, 0.35);
             text-align: center;
             transition: all 0.2s;
            font-size: 20px;
        }

        a.button4:hover {
             border-color: rgba(255, 255, 255, 1);
        }

        @media all and (max-width: 30em) {
             a.button4 {
                  display: block;
                  margin: 0.2em auto;
            }
        }

        .item-rate {
            display: inline-block;
            color: #56beb8;
            padding: 3px 0;
            margin-left: 10px;
        }

        .blog-wrap {
            border: 1px solid #dadada;
            padding: 20px;
            padding-bottom: 10px;
            margin: 0;
            position: relative;
            background: #f5f5f5;
            margin-top: 10px;
        }
        .blog-wrap2 {
            border: 1px solid #dadada;
            padding-bottom: 10px;
            margin: 0;
            position: relative;
            background: #f5f5f5;
            margin-top: 10px;
        }
        .blog-text {
            overflow: hidden;
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

    <div class="container" style="margin-top: 15px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn animated"
                     style="visibility: visible; animation-name: fadeIn;margin-right: 15px;">
                    <h2><i class="glyphicon glyphicon-cutlery"></i>
                        สำรับอาหาร
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;margin-bottom: 30px">
                <div class="col-md-4">
                    <a href="#menu" class="button4 hvr-bounce-in" style="background-color:#f14ebd" id="menu-tab"
                       role="tab" data-toggle="tab" aria-controls="menu" aria-expanded="true">
                        เมนูอาหารเช้า
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#composition" class="button4 hvr-bounce-in" style="background-color:#f14ebd"
                       id="composition-tab"
                       role="tab" data-toggle="tab" aria-controls="composition" aria-expanded="true">
                        ส่วนประกอบอาหาร
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#cooking" class="button4 hvr-bounce-in" style="background-color:#f14ebd" id="cooking-tab"
                       role="tab" data-toggle="tab" aria-controls="cooking" aria-expanded="true">
                        วิธีการทำอาหาร
                    </a>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active in" role="tabpanel" id="menu"
                     aria-labelledby="menu-tab">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 wow fadeInLeftBig animated animated"
                                 style="visibility: visible; animation-name: fadeInLeftBig;">
                                <h3>เมนูอาหารมื้อเช้าผู้สูงอายุ : <span class="violet">ต่อ/วัน</span></h3>
                            </div>
                        </div>
                        <hr/>
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                            @foreach($decks as $data)
                                <div class="col-md-6">
                                    <div class="blog-wrap work wow fadeInDown animated hvr-ripple-in"
                                         style="visibility: visible; animation-name: fadeInDown;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#">
                                                    <img class="img-thumbnail"
                                                         src="{{ asset("frontend/img/slider/1.jpg") }}">
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blog-text">
                                                    <p style="font-size: 16px;margin-top: 25px"><a href="#">{{ $data->Menu_Name }}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="composition"
                     aria-labelledby="composition-tab">
                    <div style="margin-top: 15px">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12 wow fadeInLeftBig animated animated"
                                     style="visibility: visible; animation-name: fadeInLeftBig;">
                                    <h3>ส่วนประกอบ : <span class="violet">เมนูอาหารเช้า</span></h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="col-md-5 menu-heading" style="margin-top: 40px;margin-bottom: 25px;">
                                @foreach($decks as $data)
                                    <div class="col-md-12">
                                        <div class="blog-wrap2 work wow fadeInDown animated"
                                             style="visibility: visible; animation-name: fadeInDown;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p style="font-size: 18px;margin-top: 25px" align="left">
                                                        {{ $data->Menu_Name }}
                                                    </p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="blog-text">
                                                        <button id="ID_Menu"  name="ID_Menu" value="{{ $data->ID_Menu }}"class="btn-change8 hvr-icon-forward">ดูข้อมูล</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-7 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                                <div id="the-return">
                                    <p align="center" style="margin-top: 10px" class="wow fadeInLeftBig animated animated">เลือก รายการเมนูอาหาร</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="cooking"
                     aria-labelledby="cooking-tab">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 wow fadeInLeftBig animated animated"
                                 style="visibility: visible; animation-name: fadeInLeftBig;">
                                <h3>วิธีทำการประกอบ : <span class="violet">เมนูอาหาร</span></h3>
                            </div>
                        </div>
                        <hr/>
                        <div class="col-md-5 menu-heading" style="margin-top: 40px;margin-bottom: 25px;">
                            @foreach($decks as $data)
                                <div class="col-md-12">
                                    <div class="blog-wrap2 work wow fadeInDown animated"
                                         style="visibility: visible; animation-name: fadeInDown;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p style="font-size: 18px;margin-top: 25px" align="left">
                                                    {{ $data->Menu_Name }}
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blog-text">
                                                    <button id="ID_Menu"  name="ID_Menu" value="{{ $data->ID_Menu }}" class="btn-change8 hvr-icon-forward">ดูข้อมูล</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-7 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                            <div id="the-return2">
                                <p align="center" style="margin-top: 10px" class="wow fadeInLeftBig animated animated">เลือก รายการเมนูอาหาร</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('quiz/form') }}" class="button4  hvr-icon-back hvr-grow-shadow"
           style="background-color:#64798d;font-size: 15px;width: 30%;margin-bottom: 10px">
            กลับหน้าจัดสำรับ
        </a>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("document").ready(function(){
            $("button").click(function(){
                $('#ID_Menu').click();
                var value_ID_Menu = this.value;
                console.log(value_ID_Menu);
                $.ajax({
                    url: "{{ url('/quiz/getComposition') }}/" + this.value,
                    type: 'GET',
                    success: function (response) {
                       // console.log(response);
                        $("#the-return").html(response);
                    }
                });
                $.ajax({
                    url: "{{ url('/quiz/getCooking') }}/" + this.value,
                    type: 'GET',
                    success: function (response) {
                        // console.log(response);
                        $("#the-return2").html(response);
                    }
                });
            });
        });
    </script>
@endsection