@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h4 align="center"> รูปแบบการแพ้อาหาร 14 ชนิด </h4><br/>
                                <h5 align="center">สำรับที่  : {{ $id }}</h5>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover" style="margin-top: 20px">
                                    <thead>
                                    <tr>
                                        <th>ส่วนประกอบอาหาร</th>
                                        <th>ส่วนประกอบ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($nutrition == null)
                                        <p>ยังไม่มีข้อมูล</p>
                                    @else
                                        @foreach($nutrition as $data)
                                            <tr>
                                                <td>{{ $data->composition_Name}}</td>
                                                <td>{{ $data->composition_ratio}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <section class="example">
                                    <div class="table-flip-scroll">
                                     {!! Form::open(['url' => 'deck/insertRule','files'=>true]) !!}
                                        <?=  Form::hidden('ID_Menu', $id, ['class' => 'form-control']);?>

                                        <div>
                                            <div>
                                                {{--ข้อ 1--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ผักขึ้นฉ่าย หรือป่าว</h4><br>
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
                                                {{--ข้อ 2--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ธัญพืชที่มีส่วน ประกอบของ กลูเตน
                                                            หรือป่าว</h4><br>
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
                                                {{--ข้อ 3--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ สัตว์น้ำที่มีเปลืองแข็ง
                                                            หรือป่าวว</h4><br>
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
                                                {{--ข้อ 4--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ไข่ หรือป่าว</h4><br>
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
                                                {{--ข้อ 5--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ปลา หรือป่าว</h4><br>
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
                                                {{--ข้อ 6--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ลูพิน หรือป่าว</h4><br>
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
                                                {{--ข้อ 7--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ นม หรือป่าว</h4><br>
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
                                                {{--ข้อ 8--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ สัตว์จำพวกหอยและปลาหมึก
                                                            หรือป่าว</h4><br>
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
                                                {{--ข้อ 9--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ มัสตาร์ด หรือป่าว</h4><br>
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
                                                {{--ข้อ 10--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ถั่วที่มีเปลือกแข็ง
                                                            หรือป่าว</h4><br>
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
                                                {{--ข้อ 11--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ถั่วลิสง หรือป่าว</h4><br>
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
                                                {{--ข้อ 12--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ เมล็ดงา หรือป่าว</h4><br>
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
                                                {{--ข้อ 13--}}
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="caption"><h4>คุณแพ้ ถั่วเหลือง หรือป่าว</h4><br>
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
                                                {{--ข้อ 14--}}
                                                <div class="col-sm-6 col-md-12">
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
                                </section>

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">อาการแพ้อาหารคุณคือ</div>
                            <div class="panel-body">
                                <label class="radio-inline">
                                    {{  Form::radio('disease', '1',null,['onclick' => "myFunction('True')"]) }}
                                    โรคเบาหวาน
                                </label><br>
                                <label class="radio-inline">
                                    {{  Form::radio('disease', '2',null,['onclick' => "myFunction('True')"]) }}
                                    โรคไขมันในเลือดสูง
                                </label><br>
                                <label class="radio-inline">
                                    {{  Form::radio('disease', '3',null,['onclick' => "myFunction('True')"]) }}
                                    โรคไขมันในเลือดสูง และ โรคไขมันในเลือดสูง
                                </label><br>
                                <label class="radio-inline">
                                    {{  Form::radio('disease', '4',null,['onclick' => "myFunction('True')"]) }}
                                    ไม่มี
                                </label><br>
                            </div>
                        </div>
                        <div class="form-group" align="center" style="margin-bottom: 20px">
                            <?=  Form::submit('ส่งคำตอบ', ['class' => 'btn btn-success','style'=>'margin-top: 40px']);?>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
