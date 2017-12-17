@extends('layouts.admin')

@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block" style="height: auto">
                        <div class="title-block">
                            <h2> เพิ่มข้อมูล เมนูอาหาร </h2>
                        </div>
                        {!! Form::open(['url' => 'menu','files'=>true]) !!}

                        <fieldset class="form-group">
                            {!! Form::label('namefood', 'ชื่ออาหาร')!!}
                            <?=  Form::text('namefood',null,['class' => 'form-control','placeholder'=>'เช่น อาหาร..']);?>
                        </fieldset>
                        <fieldset class="form-group">
                                {!! Form::label('id', 'กลุ่มอาหาร') !!}
                                <?=  Form::select('id',App\GroupFoods::pluck('food_name','id'),null, ['class' => 'form-control','placeholder' => 'เลือกกลุ่มอาหาร...']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('image', 'รูปภาพ')!!}
                            <?=  Form::file('image',null,['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('foods', 'ส่วนประกอบอาหาร')!!}
                            <table id="myTbl" class="table table-bordered">
                                <tr id="firstTr">
                                    <td>
                                        <div class="col-lg-7">
                                            <?=  Form::text('composition[]',null,['class' => 'form-control','id' => 'data2[]','placeholder'=>'กรุณาใส่ส่วนประกอบอาหาร..']);?>
                                        </div>
                                        <div class="col-lg-5">
                                            <?=  Form::text('ratio[]',null,['class' => 'form-control','id' => 'data2[]','placeholder'=>'กรุณาใส่อัตราส่วนของส่วนประกอบอาหาร..']);?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table width="500" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <button id="addRow" type="button">+</button>&nbsp;
                                        <button id="removeRow" type="button">-</button>&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('resource', 'ชื่อวิจัยอ้างอิง')!!}
                            <?=  Form::text('resource',null,['class' => 'form-control','placeholder'=>'ชื่อวิจัยอ้างอิง..']);?>
                        </fieldset>
                        <hr/>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <?=  Form::submit('บันทึก',['class'=>'btn btn-primary']);?>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $("#addRow").click(function() {
                $("#myTbl").append($("#firstTr").clone());
            });
            $("#removeRow").click(function() {
                if ($("#myTbl tr").size() > 1) {
                    $("#myTbl tr:last").remove();
                } else {
                    alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
                }
            });
        });
    </script>
@endsection