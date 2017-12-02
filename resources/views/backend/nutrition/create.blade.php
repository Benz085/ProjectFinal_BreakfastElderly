@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-8">
                    <div class="card card-block" style="height: auto">
                        <div class="title-block">
                            <h2> เพิ่มข้อมูลโภชนาการอาหาร</h2>
                        </div>
                        {!! Form::open(['url' => 'cooking','files'=>true]) !!}
                        <fieldset class="form-group">
                            {!! Form::label('cooking', 'วิธีการทำอาหาร')!!}
                            <?=  Form::hidden('ID_Menu',  $menu->ID_Menu  ,['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('cooking', 'วิธีการทำอาหาร')!!}
                            <?=  Form::textarea('cooking',null,['class' => 'form-control','placeholder'=>'..']);?>
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

@endsection