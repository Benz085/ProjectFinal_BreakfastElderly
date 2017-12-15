@extends('layouts.nevber')

@section('content')
    <!-- Slider -->
    <div class="slider-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset("frontend/img/slider/headerslider2.png") }}">
                                <img src="{{ asset("frontend/img/slider/headerslider2.png") }}">
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/headerslider.png') }}">
                                <img src="{{ asset('frontend/img/slider/headerslider.png') }}">
                                <div class="flex-caption">
                                   <center><h4><a href="#">อ่านเพิ่มเติม</a></h4></center>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/headerslider3.png') }}">
                                <img src="{{ asset('frontend/img/slider/headerslider3.png') }}">
                                <div class="flex-caption">
                                   <center><h4><a href="#">อ่านเพิ่มเติม</a></h4></center>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('frontend/img/slider/headerslider4.png') }}">
                                <img src="{{ asset('frontend/img/slider/headerslider4.png') }}">
                                <div class="flex-caption">
                                    <center><h4><a href="#">อ่านเพิ่มเติม</a></h4></center>
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
                    <h2>รายละเอียด<br>
                        <span class="violet">ระบบจัดสำรับอาหารเช้าผู้สูงอายุ</span>
                    </h2>
                    <p>เกี่ยวกับอาหารเช้า สำหรับผู้สูงอายุ 60 - 69 ปี .</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="service wow fadeInUp hvr-float-shadow">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>ความเป็นมา</h3>
                        <p>อาหารในมื้อเช้านั้นถือว่าเป็นมื้อสำคัญต่อสุภาพร่างกายมากที่สุดเนื่องจากตอนเช้า ....</p>
                        <button type="button" class="btn btn-info btn-lg hvr-icon-float-away" data-toggle="modal" data-target="#myModal1">อ่านเพิ่มเติม</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service wow fadeInDown hvr-float-shadow">
                        <div class="service-icon"><i class="fa fa-table"></i></div>
                        <h3>จุดประสงค์</h3>
                        <p>เพื่อพัฒนาระบบสำรับแนะนำเกี่ยวกับอาหารเช้าผู้สูงอายุบนเว็บไซต์ ...</p>
                        <button type="button" class="btn btn-info btn-lg hvr-icon-float-away" data-toggle="modal" data-target="#myModal2">อ่านเพิ่มเติม</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service wow fadeInUp hvr-float-shadow">
                        <div class="service-icon"><i class="fa fa-magic"></i></div>
                        <h3>ประโยชน์</h3>
                        <p> ผู้ใช้หรือผู้สูงอายุได้รับประโยชน์จากงานเว็บไซต์เพื่อช่วยในการเลือกอาหารเช้า ...</p>
                        <button type="button" class="btn btn-info btn-lg hvr-icon-float-away" data-toggle="modal" data-target="#myModal3">อ่านเพิ่มเติม</button>
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
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal  ความเป็นมา-->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">ความเป็นมา</h3>
                </div>
                <div class="modal-body">
                    <p style="font-size: 16px" align="left">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การบริโภคอาหารในมื้อเช้านั้นถือว่าเป็นมื้อสำคัญต่อสุภาพร่างกายมากที่สุดเนื่องจากตอนเช้าตื่นขึ้นมาร่างกาย
                        ไม่ได้รับประทานอาหารจากมื้อเย็น ประมาทสิบชั่วโมงหรือมากกว่า โดยระดับน้ำตาลในเลือดจะต่ำในขณะที่เราลุกขึ้นเคลื่อนไหวทำกิจกรรมต่างๆ
                        จะทำให้รู้สึกหิว เพราะร่างกายต้องการพลังงานเติม โดยสมองจะกระตุ้นศูนย์ควบคุมความหิวให้เราเกิดความรู้สึกหิวในเวลาต่อมา ซึ่งทำให้หิวมาก
                        และจะรับประทานอาหารในมื้อถัดมาในปริมาณมากขึ้น แล้วยังส่งผลเสียต่อระบบในร่างกายหรืออ้วนขึ้น แล้วยิ่งเป็นผู้สูงอายุที่มีความเปลี่ยนแปลงทางร่างกาย
                        ทำให้ประสิทธิภาพการทำงานของอวัยวะต่างๆ เริ่มมีการเสื่อมลง เกิดการเปลี่ยนแปลงของระบบต่างๆ และยังมีอีกหนึ่งสาเหตุสำคัญที่ทำให้คนไม่กินมื่อเช้า
                        เพราะมีความเข้าใจผิดคิดว่าการจะลดน้ำหนักต้องอดอาหาร แท้จริงแล้วคนที่ไม่กินอาหารเช้ายิ่งจะทำให้อ้วน เพราะเมื่อไม่กิน
                        ในช่วง 10-12 โมงก่อนเวลาอาหารกลางวันยิ่งจะทำให้ร่างกายโหย สมองจะหลั่งสารเคมีเพื่อให้เรากินอาหารมากขึ้น ทำให้กินจุกกินจิบ
                        และจะกินมื้อเที่ยงและมื้อเย็นมากทำให้อ้วนได้ เพราะได้รับพลังงานส่วนเกิน และคนที่ไม่กินมื้อเช้าการเผาผลาญพลังงานจะลดลงถึง 10%
                        ฉะนั้นการอดอาหารเพื่อลดน้ำหนักจึงไม่ใช่วิธีการที่ถูกต้อง
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal  จุดประสงค์-->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">จุดประสงค์</h3>
                </div>
                <div class="modal-body">
                    <p style="font-size: 17px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อพัฒนาระบบสำรับแนะนำเกี่ยวกับอาหารเช้าผู้สูงอายุบนเว็บไซต์
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal  ผู้จัดทำ-->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">ประโยชน์</h3>
                </div>
                <div class="modal-body">
                    <p align="left" style="font-size: 17px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ใช้หรือผู้สูงอายุได้รับประโยชน์จากงานเว็บไซต์เพื่อช่วยในการเลือกอาหารเช้า จะได้ฐานข้อมูลที่เป็นแหล่งรวมอาหารเช้าที่เหมาะสมสำหรับผู้สูงอายุ</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
