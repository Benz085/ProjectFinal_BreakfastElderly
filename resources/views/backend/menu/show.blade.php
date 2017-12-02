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
                        <a href="{{url('menu/'.$menu->ID_Menu.'/edit')}}" class="btn btn-primary btn-sm rounded-s">เพิ่มวิธีการทำอาหาร</a>
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
                            <div class="col-sm-6" align="center">
                                <div class="row">
                                    <p align="left">ส่วนประกอบอาหาร</p>
                                    <div class="col-md-3">
                                        @foreach($composition as $dataName)
                                            <p>{{ $dataName->composition_Name }}</p>
                                        @endforeach
                                    </div>
                                    <div class="col-md-3">
                                        @foreach($composition as $dataComposition)
                                            <p>{{ $dataComposition->composition_ratio }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" align="center">
                                <div class="row">
                                    <p>วิธีการประกอบอาหาร</p>
                                    @if($cooking == null)
                                         <p>กรุณาเพิ่มข้อมูล</p>
                                        @else
                                        <p>{{ $cooking->cooking_recipe }}<p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
