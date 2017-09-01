@extends('layouts.nevber')

@section('content')
    <!-- Slider -->
    <div class="slider-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset("frontend/img/slider/1.jpg") }}">
                                <img src="{{ asset("frontend/img/slider/1.jpg") }}">
                                <div class="flex-caption">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </div>
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/2.jpg') }}">
                                <img src="{{ asset('frontend/img/slider/2.jpg') }}">
                                <div class="flex-caption">
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/3.jpg') }}">
                                <img src="{{ asset('frontend/img/slider/3.jpg') }}">
                                <div class="flex-caption">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/4.jpg') }}">
                                <img src="{{ asset('frontend/img/slider/4.jpg') }}">
                                <div class="flex-caption">
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Presentation -->
    <div class="presentation-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInLeftBig">
                    {{--  ชื่อโปรเจค  --}}
                    <h1>Project <span class="violet">Andia</span>, a super cool design agency.</h1>
                    <p>บรรยายเกี่ยวกับ.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>ความเป็นมา</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><i class="fa fa-table"></i></div>
                        <h3>จุดประสงค์</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-magic"></i></div>
                        <h3>วิธีการใช้งานเว็บไซต์</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn">
                    <h2>แนะนำเว็บไซต์</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="testimonial-image">
                                    <img src="{{ asset('frontend/img/testimonials/1.jpg') }}" alt="" data-at2x="{{ asset('frontend/img/testimonials/1.jpg') }}">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-image">
                                    <img src="{{ asset('frontend/img/testimonials/2.jpg') }}" alt="" data-at2x="{{ asset('frontend/img/testimonials/2.jpg') }}">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="testimonial-image">
                                    <img src="{{ asset('frontend/img/testimonials/3.jpg') }}" alt="" data-at2x="{{ asset('frontend/img/testimonials/3.jpg') }}">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="testimonial-image">
                                    <img src="{{ asset('frontend/img/testimonials/1.jpg') }}" alt="" data-at2x="{{ asset('frontend/img/testimonials/1.jpg') }}">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
