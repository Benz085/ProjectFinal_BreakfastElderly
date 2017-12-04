@extends('layouts.admin')
@section('head')
    <style>
        ul.v_menu{ /* กำหนดขอบเขตของเมนู */
            list-style:none;
            margin:0px;
            padding:0px;
            font-family:tahoma, "Microsoft Sans Serif", Vanessa;
            font-size:12px;
            color: #0b0b0b;
        }
        ul.v_menu > li{ /* กำหนดรูปแบบให้กับเมนูเ */
            display:block;
            width:150px;
            height:20px;
            text-indent:5px;
            float:left;
            text-align:center;
        }
        ul.v_menu > li:hover{ /* กำหนดรูปแบบให้กับเมนูเมื่อมีเมาส์อยู่เหนือ */
            display:block;
            text-indent:5px;
            text-align:center;
        }
        ul.v_menu > li > a{ /* กำหนดรูปแบบให้กับลิ้งค์ */
            text-decoration:none;
            color:#FFFFFF;
            line-height:20px;
        }
    </style>
@endsection

@section('content')
    <article class="content dashboard-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            เพิ่มข้อมูล
                            <a href="{{ url('menu/create') }}" class="btn btn-primary btn-sm rounded-s">เมนูอาหาร</a>
                        </h3>
                        <div class="col-md-3">
                            <?=  Form::select('foodID',App\GroupFoods::pluck('food_name','id'),null, ['id' => 'foodID','class' => 'form-control','placeholder' => 'โหมดกลุ่มอาหาร...']);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card items">
            <ul class="item-list striped">
                <li class="item item-list-header hidden-sm-down">
                    <div class="item-row">
                        <div class="item-col item-col-header fixed item-col-img md">
                            {{--<div><span style="font-size: 15px">รูปภาพ</span> </div>--}}
                        </div>
                        <div class="item-col item-col-header item-col-title">
                            <div> <span style="font-size: 15px">ชื่ออาหาร</span> </div>
                        </div>
                        <div class="item-col item-col-header item-col-category">
                            <div class="no-overflow"> <span style="font-size: 15px">ประเภท</span> </div>
                        </div>
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                    </div>
                </li>
                <div id="the-return">
                   <p align="center" style="margin-top: 10px">เลือก โหมดกลุ่มอาหาร</p>
                </div>
            </ul>
        </div>
    </article>
@endsection
@section('script')
    <script type="text/javascript">
        $("document").ready(function(){
            $('#foodID').on('change', function () {
                var value_foodID = this.value;
//                console.log(value_foodID);
                $.ajax({
                    url: "{{ url('/menu/getGroupMenu') }}/" + this.value,
                    type: 'GET',
                    success: function (response) {
//                        console.log(response);
                        $("#the-return").html(response);
                    }
                });
                return false;
            });
        });
    </script>
@endsection