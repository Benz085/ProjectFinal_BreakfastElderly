<?php
//echo '<pre>';
//print_r($decks[5][0]->Menu_Name);
$count = count($decks);

//                            dd([0][$decks]);
?>
@extends('layouts.nevber')
@section('head')
    {{--buttons--}}
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <style>

        img {
            max-width: 100%;
            margin-top: -10px;
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
    </style>

@endsection
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <a><i class="glyphicon glyphicon-cutlery"></i></a>
                    <h1>ระบบสำหรับอาหารเช้าผู้สูงอายุ</h1>
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
                <div class="col-md-6">
                    <a href="#menu" class="button4 hvr-bounce-in" style="background-color:#f14ebd" id="menu-tab"
                       role="tab" data-toggle="tab" aria-controls="menu" aria-expanded="true">
                        สำรับ เมนูอาหารเช้า
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#composition" class="button4 hvr-bounce-in" style="background-color:#f14ebd"
                       id="composition-tab"
                       role="tab" data-toggle="tab" aria-controls="composition" aria-expanded="true">
                        ข้อมูลจัดสำรับอาหารในแต่ครั้ง
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
                                <h3>เมนูอาหารมื้อเช้าผู้สูงอายุ : <span class="violet">สำรับต่อ / วัน</span></h3>

                            </div>
                        </div>
                        <hr/>

                        <?php

                        for ($i = 0; $i < count($decks); $i++) {
                            foreach ($decks[$i] as $data) {
                                $arr[$i] = [
                                    'ID_Deck' => $data->ID_Deck,
                                ];
                            }
                        }
                        ?>
                        <div class="col-md-12 menu-heading" style="margin-top: 10px;margin-bottom: 25px;">
                            <div class="col-md-4">
                                <h4 class="wow fadeInLeftBig animated animated">สำรับอาหาร 7 วัน หรือ 1 สัปดาห์</h4>
                                @for($i = 0; $i < count($arr); $i++)
                                    <button id="ID_Deck" style="background-color:#f14ebd;width: 100%;margin-top: 10px"  name="ID_Deck"
                                               value="{{ $arr[$i]['ID_Deck'] }}" class="btn btn-primary hvr-bounce-in">
                                            เมนูอาหารมื้อเช้าผู้สูงอายุ สำรับที่ <?= $arr[$i]['ID_Deck'] ?>
                                    </button>
                                @endfor
                            </div>
                           <div class="col-md-8">
                               <div id="return-data">
                                   <p align="center" style="margin-top: 10px" class="wow fadeInLeftBig animated animated">
                                       เลือก สำรับอาหาร
                                   </p>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <a href="{{ url('quiz/form') }}" class="button4  hvr-icon-back hvr-grow-shadow"
           style="background-color:#7DA0B1;font-size: 15px;width: 30%;margin-bottom: 10px;margin-right: 95px;">
            กลับหน้าจัดสำรับ
        </a>
        <a href="{{ url('quiz/form') }}" class="button4  hvr-icon-float-away"
           style="background-color:#64798d;font-size: 15px;width: 30%;margin-bottom: 10px">
            เพิ่มข้อมูลการจัดสำรับอาหาร
        </a>
    </div>
    <div class="page-title-container">
        <div class="container">
            <div class="row" align="center">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <a><i class="glyphicon glyphicon-cutlery"></i></a>
                    <p style="font-size: 20px;color: #ffff00">ข้อมูลจัดอาหาร โรคเบาหวาน กับ โรคไขมันในเลือดสูง โดยไม่ทำโรคที่ใกล้เคียงกัน</p>
                    <a><i class="glyphicon glyphicon-cutlery"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("document").ready(function () {
            $("button").click(function () {
                $('#ID_Menu').click();
                var value_ID_Menu = this.value;
                // console.log(value_ID_Menu);

                $('#ID_Deck').click();
                var value_ID_Deck = this.value;
                console.log(value_ID_Deck);

                $.ajax({
                    url: "{{ url('/quiz/getDeck') }}/" + this.value,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $("#return-data").html(response);
                    }
                });

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