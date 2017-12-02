@extends('layouts.nevber')
@section('head')
    <style>
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
    </style>
    <script src="{{ asset('frontend/js/sweetalert.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/sweetalert.css') }}">

    <script src="{{ asset('frontend/conditional/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/conditional/conditional.js') }}"></script>
    <script src="{{ asset('frontend/conditional//bootstrap-iso.css') }}"></script>

@endsection
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <a><i class="glyphicon glyphicon-cutlery"></i></a>
                    <h1>ระบบสำรับอาหารเช้าผู้สูงอายุ</h1>
                </div>
            </div>
        </div>
    </div>
    <center>
        <div class="container-fluid" style="margin-top: 15px">
            <div class="col-md-8" style="float: inherit;">
                <div class="menu-item">
                    <h2>คำถาม</h2>
                </div>
                <div class="row">
                    <div class="panel panel-default">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8 col-md-offset-2" align="center">
                                    {!! Form::open(['url' => 'quiz','files'=>true ,'id' => 'live_form']) !!}
                                    <div class="form-group" style="margin-top: 15px">
                                        <label class="control-label ">
                                            <h3>คุณแพ้อาหารหรือไม่ !</h3>
                                        </label>
                                        <div class="">
                                            <div class="radio">
                                                <label class="radio">
                                                    {{--<input name="rating" type="radio" value="Yes"/>--}}
                                                    {{  Form::radio('rating', 'Yes',null,['onclick' => "myFunction('True')"]) }}
                                                    ใช่
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="radio">
                                                    {{--<input name="rating" type="radio" value="No"/>--}}
                                                    {{  Form::radio('rating', 'No',null,['onclick' => "myFunction('False')"]) }}
                                                    ไม่
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group hidden" id="div_quiz1">
                                        <hr>
                                        {{--ข้อ 1--}}
                                        <div>
                                            <p style="font-size: 15px;color: #101010">
                                                <label class="control-label ">
                                                    รูปแบบการแพ้อาหาร 14 ชนิด
                                                </label>
                                            </p>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ผักขึ้นฉ่าย หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="celery" type="radio" value="1"/>--}}
                                                                {{  Form::radio('celery', '1',null,['onclick' => "myFunction('True')"]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="celery" type="radio" value="0"/>--}}
                                                                {{  Form::radio('celery', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 2--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ธัญพืชที่มีส่วน ประกอบของ กลูเตน
                                                                หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="gluten" type="radio" value="1"/>--}}
                                                                {{  Form::radio('gluten', '1') ,null,['onclick' => "myFunction('True')"] }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="gluten" type="radio" value="0"/>--}}
                                                                {{  Form::radio('gluten', '0') ,null,['onclick' => "myFunction('False')"] }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 3--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ สัตว์น้ำที่มีเปลืองแข็ง
                                                                หรือป่าวว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="Sea_animals" type="radio" value="1"/>--}}
                                                                {{  Form::radio('Sea_animals', '1',null,['onclick' => "myFunction('True')"]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="Sea_animals" type="radio" value="0"/>--}}
                                                                {{  Form::radio('Sea_animals', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 4--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ไข่ หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="egg" type="radio" value="1"/>--}}
                                                                {{  Form::radio('egg', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="egg" type="radio" value="0"/>--}}
                                                                {{  Form::radio('egg', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 5--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ปลา หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="fish" type="radio" value="1"/>--}}
                                                                {{  Form::radio('fish', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="fish" type="radio" value="0"/>--}}
                                                                {{  Form::radio('fish', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 6--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ลูพิน หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="lupine" type="radio" value="1"/>--}}
                                                                {{  Form::radio('lupine', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="lupine" type="radio" value="0"/>--}}
                                                                {{  Form::radio('lupine', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--ข้อ 7--}}
                                        <br>
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ นม หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="mike" type="radio" value="1"/>--}}
                                                                {{  Form::radio('mike', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="mike" type="radio" value="0"/>--}}
                                                                {{  Form::radio('mike', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 8--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ สัตว์จำพวกหอยและปลาหมึก
                                                                หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="shellfish_squid" type="radio" value="1"/>--}}
                                                                {{  Form::radio('shellfish_squid', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="shellfish_squid" type="radio" value="0"/>--}}
                                                                {{  Form::radio('shellfish_squid', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 9--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ มัสตาร์ด หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{  Form::radio('mustard', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                {{--<input name="mustard" type="radio" value="1"/>--}}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{  Form::radio('mustard', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                {{--<input name="mustard" type="radio" value="0"/>--}}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 10--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ถั่วที่มีเปลือกแข็ง
                                                                หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="Nuts_with_hard_shell" type="radio" value="1"/>--}}
                                                                {{  Form::radio('Nuts_with_hard_shell', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="Nuts_with_hard_shell" type="radio" value="0"/>--}}
                                                                {{  Form::radio('Nuts_with_hard_shell', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 11--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ถั่วลิสง หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="peanut" type="radio" value="1"/>--}}
                                                                {{  Form::radio('peanut', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="peanut" type="radio" value="0"/>--}}
                                                                {{  Form::radio('peanut', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 12--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ เมล็ดงา หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="sesame_seeds" type="radio" value="1"/>--}}
                                                                {{  Form::radio('sesame_seeds', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="sesame_seeds" type="radio" value="0"/>--}}
                                                                {{  Form::radio('sesame_seeds', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 13--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ถั่วเหลือง หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="soybean" type="radio" value="1"/>--}}
                                                                {{  Form::radio('soybean', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                {{--<input name="soybean" type="radio" value="0"/>--}}
                                                                {{  Form::radio('soybean', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{--ข้อ 14--}}
                                        <div>
                                            <div>
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="thumbnail">
                                                        <img alt="100%x200" data-src="holder.js/100%x200"
                                                             style="height: 200px; width: 100%; display: block;"
                                                             src="{{ asset("frontend/img/newscms.jpg") }}"
                                                             data-holder-rendered="true" data-lity>
                                                        <div class="caption"><h3>คุณแพ้ ซัลเฟอร์ได อ็อกไซด์
                                                                หรือป่าว</h3><br>
                                                            <label class="radio-inline">
                                                                {{--<input name="sulfur_oxide" type="radio" value="1"/>--}}
                                                                {{  Form::radio('sulfur_oxide', '1',null,['onclick' => "myFunction('True')" ]) }}
                                                                ใช่
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input name="sulfur_oxide" type="radio" value="0"/>
                                                                {{  Form::radio('sulfur_oxide', '0',null,['onclick' => "myFunction('False')"]) }}
                                                                ไม่
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                    </div>
                                    <div class="form-group hidden" id="thanks_anyway">
                                        <label class="control-label">
                                            กดยืนยัน ได้เลย
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <?=  Form::submit('ส่งคำตอบ', ['class' => 'btn btn-success']);?>
                                    </div>
                                    {{--</form>--}}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>

@endsection

@section('script')
    {{--<script>--}}
    {{--function myFunction(clr) {--}}
    {{--if ('True' == clr){--}}
    {{--document.onclick = function () {--}}
    {{--swal("คำตอบ!", "คำตอบคุณเลือกคือ ใช่!", "success");--}}
    {{--};--}}
    {{--//                console.log("True");--}}
    {{--}else {--}}
    {{--document.onclick = function () {--}}
    {{--swal("คำตอบ!", "คำตอบคุณเลือกคือ ไม่!", "success");--}}
    {{--};--}}
    {{--//                console.log("False");--}}
    {{--}--}}
    {{--}--}}
    {{--</script>--}}

    {{--<script>--}}
    {{--document.querySelector('.sweet-3').onclick = function () {--}}
    {{--swal("Good job!", "You clicked the button!", "success");--}}
    {{--};--}}
    {{--</script>--}}
@endsection
