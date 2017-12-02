@extends('layouts.nevber')
@section('head')
    <style>
        .shop-products .menu-item {
            margin: 0;
            padding: 0 0 30px 0;
        }
        .cbp .cbp-item {
            position: absolute;
            top: 0;
            left: 0;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .cbp-item-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            top: 0;
            left: 0;
        }
        .cbp-caption-active .cbp-caption, .cbp-caption-active .cbp-caption-defaultWrap, .cbp-caption-active .cbp-caption-activeWrap {
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .cbp-caption-active .cbp-caption-defaultWrap {
            top: 0;
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
            max-width: 95%;
        }

        .btn-change8 {
            height: 50px;
            width: 100px;
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
        .item-rate {
            display: inline-block;
            color: #56beb8;
            padding: 3px 0;
            margin-left: 10px;
        }
    </style>

@endsection
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {{--<a><i class="glyphicon glyphicon-cutlery"></i></a>--}}
                    {{--<h1>ระบบสำรับอาหารเช้าผู้สูงอายุ</h1>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">
                <h1>สาระเกี่ยวกับ <span class="violet">ผู้สูงวัย</span></h1>
                <p>อธิบาย.</p>
            </div>
        </div>
    </div>
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h2>เมนูอาหารแนะนำ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="work wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset("frontend/img/slider/1.jpg") }}" alt="Lorem Website" data-at2x="assets/img/portfolio/work1.jpg">
                        <h3>Lorem Website</h3>
                        <div class="item-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o dark"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="{{ asset("frontend/img/slider/1.jpg") }}"><i class="fa fa-search"></i></a>
                            <a class="big-link-1" href="{{ url('reviewMenu/reviewMenuDetail') }}">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="work wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <img src="{{ asset("frontend/img/slider/1.jpg") }}" alt="Ipsum Logo" data-at2x="assets/img/portfolio/work2.jpg">
                        <h3>Ipsum Logo</h3>
                        <div class="item-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o dark"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="{{ asset("frontend/img/slider/1.jpg") }}"><i class="fa fa-search"></i></a>
                            <a class="big-link-1" href="{{ url('reviewMenu/reviewMenuDetail') }}">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="work wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset("frontend/img/slider/1.jpg") }}" alt="Dolor Prints" data-at2x="assets/img/portfolio/work3.jpg">
                        <h3>Dolor Prints</h3>
                        <div class="item-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o dark"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="{{ asset("frontend/img/slider/1.jpg") }}"><i class="fa fa-search"></i></a>
                            <a class="big-link-1" href="{{ url('reviewMenu/reviewMenuDetail') }}">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="work wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <img src="{{ asset("frontend/img/slider/1.jpg") }}" alt="Sit Amet Website" data-at2x="assets/img/portfolio/work4.jpg">
                        <h3>Sit Amet Website</h3>
                        <div class="item-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o dark"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="{{ asset("frontend/img/slider/1.jpg") }}"><i class="fa fa-search"></i></a>
                            <a class="big-link-1" href="{{ url('reviewMenu/reviewMenuDetail') }}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a href="{{ url('reviewMenu/reviewMenuView') }}"><button class="btn-change8">อ่านทั้งหมด</button></a>
            <br>
        </div>
    </div>
    <div class="work-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h2>กระทู้สนทนา</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="service wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>Beautiful Websites</h3>
                        <p>ผู้สร้างกระทู้ : </p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>Responsive Layout</h3>
                        <p>ผู้สร้างกระทู้ : </p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>Awesome Logos</h3>
                        <p>ผู้สร้างกระทู้ : </p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>High Res Prints</h3>
                        <p>ผู้สร้างกระทู้ : </p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <br>
            <a href="{{ url('posts') }}"><button class="btn-change8">อ่านทั้งหมด</button></a>
            <br>
        </div>
    </div>
    <div class="work-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h2>การดูแลสุขภาพ</h2>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $dataArticle)
                <div class="col-sm-3">
                    <div class="work wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset("backend/images/".$dataArticle->article_image) }}" alt="Lorem Website" data-at2x="{{ asset("backend/images/".$dataArticle->article_image) }}">
                        <h3>{{ $dataArticle->article_title}}</h3>
                        <p style="font-size: 15px">โดย : {{ $dataArticle->article_creator}}</p>
                        <div class="work-bottom">
                            <a class="big-link-1" href="{{ url('article/'.$dataArticle->article_id) }}">อ่านบทความ</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <a href="{{ url('article') }}"><button class="btn-change8">อ่านทั้งหมด</button></a>
            <br>
        </div>
        <br>
        <br>
        <br>
    </div>

@endsection
@section('script')

@endsection