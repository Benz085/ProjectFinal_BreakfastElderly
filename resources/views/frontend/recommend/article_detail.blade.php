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
        p{
            font-size: 17px;
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
                        บทความ
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row" style="margin-top: 15px">
                    <div class="col-sm-4">
                        <div class="shop-img">
                            <img src="{{ asset("backend/images/".$article->article_image) }}" alt="" data-lity>
                        </div><br><br>
                        <p>วันเดือนปีข่าวที่ลง : {{ $article->article_updatatime }}</p><br>
                        <p>โดย : {{ $article->article_creator }}</p><br>
                    </div>
                    <div class="col-sm-8">
                        <hr>
                        <h2>เนื้อหา</h2>
                        <hr>
                        <div align="left">
                            <h4><b>หัวข้อเรื่อง</b><p> {{ $article->article_title }}</p></h4><br>
                            <h4><b>รายละเอียด</b><p> {!! $article->article_detail !!} </p></h4><br>
                            <h4><b>ที่มา </b><p> {{ $article->article_resource }}</p></h4><br>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection