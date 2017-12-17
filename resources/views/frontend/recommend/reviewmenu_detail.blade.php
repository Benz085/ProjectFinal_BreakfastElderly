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
        p{
            font-size: 17px;
        }
        td{
            font-size: 17px;
        }
        li{
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
                    <h1>ระบบสำหรับอาหารเช้าผู้สูงอายุ</h1>
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
                        <img src="{{ asset("backend/images/".$menu->Menu_Image) }}" alt="" data-lity style="width: 50%">
                    </div>
                    <hr>
                    <h2>เมนู :  {{ $menu->Menu_Name }}</h2>
                    <hr>
                    <p>เวลาที่โพส : {{ $menu->created_at }}</p>
                    <hr>
                    <p>แหล่งอ้างอิง : {{ $menu->memu_resource }}</p>
                    <hr>
                </div>
                <div class="col-sm-6" align="left">
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
                    <hr>
                    <h3>วิธีทำ</h3>
                    <div class="col-sm-12">
                        @if($cooking == null)
                            <p>ยังไม่มีข้อมูล</p>
                        @else
                            <p align="left" style="margin-left: 10px;font-size: 20px">
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