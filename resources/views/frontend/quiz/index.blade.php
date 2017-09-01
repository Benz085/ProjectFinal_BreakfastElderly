@extends('layouts.nevber')
@section('head')
    <script src="{{ asset('frontend/conditional/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/conditional/conditional.js') }}"></script>
    <script src="{{ asset('frontend/conditional//bootstrap-iso.css') }}"></script>


@endsection
@section('content')

    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">สำรับอาหาร : 1 มื้อเช้า</h3>สุ่ม : {{ $randon }}
                    </div>
                    <div class="panel-body">
                        <div class="bootstrap-iso">
                            <div class="container-fluid">
                                <div class="row">
                                    @foreach($decks as $data)
                                        <div class="col-sm-3">
                                            <div class="work wow fadeInUp animated"
                                                 style="visibility: visible; animation-name: fadeInUp;">
                                                <img src="{{ asset('backend/images/'.$data->Menu_Image) }}"
                                                     alt="Lorem Website" data-at2x="assets/img/portfolio/work1.jpg">
                                                <h3>เมนูอาหารเช้า</h3>
                                                <p style="font-size: 15px;color: #0f0f0f">{{ $data->Menu_Name }}</p>
                                                <div class="work-bottom">
                                                    <a class="big-link-2 view-work" href="#"><i
                                                                class="fa fa-search"></i></a>
                                                    <a class="big-link-2" href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection