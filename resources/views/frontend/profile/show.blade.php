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
                <div class="col-sm-12 work-title wow fadeIn animated animated" style="visibility: visible;
                animation-name: fadeIn;">
                    <h2>ข้อมูลส่วนตัว</h2>
                </div>
            </div>
            <div style="margin-top: 15px">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4>แก้ไขข้อมูลส่วนตัว</h4>
                        <br> <p>โรค:{{ $disease->diseases_type }}<p>
                        </div>
                        <div class="panel-body" style="font-size: 17px">
                            {{ Form::model($user,['url' =>'profile/'.$user->id,'method' => 'put']) }}
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                    {!! Form::label('name', 'ชื่อ')!!}
                                    <?=  Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อ - นามสกุล','style' =>'font-size: 17px']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                     {!! Form::label('email', 'EMAIL')!!}
                                    <?=  Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email','style' =>'font-size: 17px']);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?=  Form::submit('บันทึก',['class'=>'btn btn-success']);?>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection