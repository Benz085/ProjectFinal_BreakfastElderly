@extends('layouts.nevber')
@section('head')
    <style>
        img {
            max-width: 90%;
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
        .shop-img {
            border: 3px solid #FFF;
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
                        รีวิวอาหารเช้า
                        <i class="glyphicon glyphicon-cutlery"></i>
                    </h2>
                </div>
            </div>
            <div class="row" style="margin-top: 15px">
                <div class="col-sm-6">
                    <div class="shop-img">
                        <img src="{{ asset("frontend/img/portfolio/work8.jpg") }}" alt="">
                    </div>
                    <hr>
                    <h3>ส่วนประกอบ</h3>
                    <hr>
                    <table class="table table-bordered" style="margin-top: 20px">
                        <thead>
                        <tr>
                            <th>ส่วนประกอบ</th>
                            <th>อัตราส่วน</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($composition as $data)
                            <tr>
                                <td>{{ $data->composition_Name}}</td>
                                <td>{{ $data->composition_ratio }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6" align="left">
                    <h2>เมนู :  {{ $menu->Menu_Name }}</h2>
                    <hr>
                    <h3>วิธีทำ</h3>
                    <div class="col-sm-6">
                        @if($cooking == null)
                            <p>ยังไม่มีข้อมูล</p>
                        @else
                            <p align="left" style="margin-left: 10px;font-size: 17px">
                            {!! $cooking->cooking_recipe !!}
                            <p>
                        @endif
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