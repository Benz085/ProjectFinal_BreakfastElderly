@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-10">
                    <div class="card card-block" style="height: auto">
                        <div class="title-block">
                            <h3> เพิ่มข้อมูลโภชนาการส่วนประกอบอาหาร</h3>
                        </div>
                        {!! Form::open(['url' => 'nutrition','files'=>true]) !!}
                        <fieldset class="form-group">
                            <p>ส่วนประกอบ  : {{  $composition->composition_Name }}</p>
                            <?=  Form::hidden('ID_Composition', $composition->ID_Composition   ,['class' => 'form-control']);?>
                            <?=  Form::hidden('ID_Menu', $composition->ID_Menu   ,['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('foods', 'ส่วนประกอบโภชนาการ')!!}
                            <table id="myTbl" class="table table-bordered">
                                <tr id="firstTr">
                                    <td>
                                        <div class="col-lg-7">
                                            <?=  Form::select('nutrition_id[]',App\Models\Nutrition::pluck('nutrition_category','nutrition_id'),null, ['class' => 'form-control','id' => 'data2[]','placeholder' => 'เลือกกลุ่มโภชนการ...']);?>
                                        </div>
                                        <div class="col-lg-5">
                                            <?=  Form::text('nutrition_detail_ratio[]',null,['class' => 'form-control','id' => 'data2[]','placeholder'=>'กรุณาใส่อัตราส่วนของส่วนโภชนาการ..']);?>
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
                        <hr/>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <?=  Form::submit('บันทึก',['class'=>'btn btn-primary']);?>
                                <a href="{{url( 'menu/'.$composition->ID_Menu)}}" class="btn btn-success btn-sm rounded-s">กลับ</a>
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