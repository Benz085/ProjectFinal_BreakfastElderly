@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            เมนู : {{ $menu->Menu_Name }}
                        </h3>
                        <a href="{{url('#')}}" class="btn btn-success btn-sm rounded-s">แก้ไขเมนูอาหาร</a>
                        <a href="{{url('#')}}" class="btn btn-info btn-sm rounded-s">เพิ่มโภชนาการ</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="col-sm-12" align="center">
                                <div class="row">
                                    <h3>ส่วนประกอบอาหาร</h3>
                                    <table class="table table-hover" style="margin-top: 20px">
                                        <thead>
                                        <tr>
                                            <th>ส่วนประกอบ</th>
                                            <th>อัตราส่วน</th>
                                            <th>จัดการข้อมูล</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($composition as $data)
                                            <tr>
                                                <td>{{ $data->composition_Name}}</td>
                                                <td>{{ $data->composition_ratio }}</td>
                                                <td>
                                                    {{--<p>{{ $data->ID_Composition }}</p>--}}
                                                    <div class="tasks-block" style="margin-top: -15px;height: 30px;">
                                                        <ul class="item-list">
                                                            <li class="item">
                                                                <div class="item-row">
                                                                    <div class="item-col fixed item-col-actions-dropdown">
                                                                        <div class="item-actions-dropdown">
                                                                            <a class="item-actions-toggle-btn">
                                                                                <span class="inactive"><i
                                                                                            class="fa fa-cog"></i></span>
                                                                                <span class="active"><i
                                                                                            class="fa fa-chevron-circle-right"></i></span>
                                                                            </a>
                                                                            <div class="item-actions-block">
                                                                                <ul class="item-actions-list">
                                                                                    <li>
                                                                                        <a class="check"
                                                                                           href="{{url('nutrition/'.$data->ID_Composition.'/')}}">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="edit" href="#">
                                                                                            <i class="fa fa-pencil"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="remove" href="#"
                                                                                           data-toggle="modal"
                                                                                           data-target="#confirm-modal">
                                                                                            <i class="fa fa-trash-o "></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h3 align="center">วิธีการประกอบอาหาร</h3>
                                    <hr/>
                                    @if($cooking == null)
                                        <p>กรุณาเพิ่มข้อมูล</p>
                                    @else
                                        <p align="left" style="margin-left: 10px;font-size: 17px">
                                        {{ $cooking->cooking_recipe }}
                                        <p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($cooking == null)
                        <a href="{{url('menu/'.$menu->ID_Menu.'/edit')}}" class="btn btn-primary btn-sm rounded-s">เพิ่มวิธีการทำอาหาร</a>
                    @else
                        <a href="{{url('#')}}" class="btn btn-success btn-sm rounded-s">แก้ไขการประกอบอาหาร</a>
                    @endif
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h3 align="center">โภชนาการอาหาร ส่วนประกอบอาหาร</h3>
                                    <hr/>
                                    <table class="table table-hover" style="margin-top: 20px">
                                        <thead>
                                        <tr>
                                            <th>ส่วนประกอบอาหาร</th>
                                            <th>โภชนาการ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($nutrition == null)
                                            <p>ยังไม่มีข้อมูล</p>
                                        @else
                                            @foreach($nutrition as $data)
                                                <tr>
                                                    <td>{{ $data->composition_Name}}</td>
                                                    <td>{{ $data->nutrition_category}}</td>
                                                    <td>{{ $data->nutrition_detail_ratio }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <center><a href="{{url( 'menu')}}" class="btn btn-warning btn-sm rounded-s" style="margin: 0 auto">กลับ</a></center>
    </article>

@endsection
