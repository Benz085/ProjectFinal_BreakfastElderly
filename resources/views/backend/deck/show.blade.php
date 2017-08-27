@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            สำรับอาหารชุดที่ : {{ $id }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card items">
            <ul class="item-list striped">
                <li class="item item-list-header hidden-sm-down">
                    <div class="item-row">
                        <div class="col-md-2">
                            <div class="item-col item-col-header fixed item-col-img md">
                                <div><span>รูปภาพ</span></div>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-title">
                            <div><span>ชื่ออาหาร</span></div>
                        </div>
                        <div class="item-col item-col-header item-col-category">
                            <div class="no-overflow"><span>ประเภท</span></div>
                        </div>
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"></div>
                    </div>
                </li>
                @foreach($data as $res)
                    <li class="item">
                        <div class="item-row">
                            <div class="col-md-2">
                                <div class="item-col fixed item-col-img md">
                                    <a href="#">
                                        <div class="item-img rounded"
                                             style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col fixed pull-left item-col-title">
                                <div class="item-heading">ชื่ออาหาร</div>
                                <div>
                                    <a href="#" class="" style="text-decoration:none;">
                                        <h4 class="item-title"> {{ $res->Menu_Name }} </h4><br>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col item-col-category no-overflow">
                                <div class="item-heading">ประเภท</div>
                                <div class="no-overflow" style="text-decoration:none;"> {{ $res->food_name }}</div>
                                <br>
                            </div>
                            <div class="item-col fixed item-col-actions-dropdown">
                                <div class="item-actions-dropdown">
                                    <a class="item-actions-toggle-btn">
                                            <span class="inactive">
									<i class="fa fa-cog"></i>
								</span>
                                        <span class="active">
								<i class="fa fa-chevron-circle-right"></i>
								</span>
                                    </a>
                                    <div class="item-actions-block">
                                        <ul class="item-actions-list">
                                            <li>
                                                <a class="remove" href="#" data-toggle="modal"
                                                   data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="edit" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </article>
@endsection


