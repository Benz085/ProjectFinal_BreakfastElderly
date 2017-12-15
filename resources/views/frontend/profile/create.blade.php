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
                        <div class="panel-heading">เพิ่มข้อมูลโรคส่วนตัว</div>
                        <div class="panel-body" style="font-size: 17px">
                            {!! Form::open(['url' => 'profile','files'=>true]) !!}
                            <div class="col-sm-6 col-md-12">
                                <div class="caption" align="left"><h4>อาการแพ้อาหารคุณคือ</h4><br>
                                    <label class="radio-inline">
                                        {{  Form::radio('disease', '1',null,['onclick' => "myFunction('True')"]) }}
                                        โรคเบาหวาน
                                    </label><br>
                                    <label class="radio-inline">
                                        {{  Form::radio('disease', '2',null,['onclick' => "myFunction('True')"]) }}
                                        โรคไขมันในเลือดสูง
                                    </label><br>
                                    <label class="radio-inline">
                                        {{  Form::radio('disease', '3',null,['onclick' => "myFunction('True')"]) }}
                                        โรคไขมันในเลือดสูง และ  โรคไขมันในเลือดสูง
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <?=  Form::submit('บันทึก', ['class' => 'btn btn-primary']);?>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection