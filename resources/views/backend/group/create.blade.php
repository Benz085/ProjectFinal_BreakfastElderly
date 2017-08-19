@extends('layouts.admin')

@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-8">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h2> เพิ่มข้อมูล  </h2>
                        </div>
                        {!! Form::open(['url' => 'groupsfood','files'=>true]) !!}

                            <fieldset class="form-group">
                                {!! Form::label('groupfood', 'กลุ่มอาหาร')!!}
                                <?=  Form::text('groupfood',null,['class' => 'form-control','placeholder'=>'เช่น อาหาร..']);?>
                            </fieldset>
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
