@extends('layouts.nevber')
@section('head')

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
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">คำถาม</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8 col-md-offset-2" align="center">
                                {!! Form::open(['url' => 'quiz','files'=>true ,'id' => 'live_form']) !!}
                                <div class="form-group">
                                    <label class="control-label ">
                                        คุณแพ้อาหารหรือไม่ !
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
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ผักขึ้นฉ่าย หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <br>
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ธัญพืชที่มีส่วน ประกอบของ กลูเตน หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <br>
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ สัตว์น้ำที่มีเปลืองแข็ง หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ไข่ หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ปลา หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ลูพิน หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ นม หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ สัตว์จำพวกหอยและปลาหมึก หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ สัตว์จำพวกหอยและปลาหมึก หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ถั่วที่มีเปลือกแข็ง หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ถั่วลิสง หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ เมล็ดงา หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ถั่วเหลือง หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <div>
                                        <p style="font-size: 15px;color: #101010">
                                            <label class="control-label ">
                                                คุณแพ้ ซัลเฟอร์ได อ็อกไซด์ หรือป่าว
                                            </label>
                                        </p>
                                        <div>
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
                                        <p>ตัวอย่าง :</p>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group hidden" id="thanks_anyway">
                                    <label class="control-label">
                                        กดยืนยัน ได้เลย
                                    </label>
                                </div>
                                <div class="form-group">
                                    <?=  Form::submit('บันทึก', ['class' => 'btn btn-primary']);?>
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
@endsection

@section('script')
    <script>
        function myFunction(clr) {
            if ('True' == clr){
                document.onclick = function () {
                    swal("คำตอบ!", "คำตอบคุณเลือกคือ ใช่!", "success");
                };
//                console.log("True");
            }else {
                document.onclick = function () {
                    swal("คำตอบ!", "คำตอบคุณเลือกคือ ไม่!", "success");
                };
//                console.log("False");
            }c
        }
    </script>

    <script>
        document.querySelector('.sweet-3').onclick = function () {
            swal("Good job!", "You clicked the button!", "success");
        };
    </script>
@endsection
