@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-8">
                    <div class="card card-block" style="height: auto">
                        <div class="title-block">
                            <h2> วิธีการทำอาหาร : {{ $menu->Menu_Name }}</h2>
                        </div>
                        {!! Form::open(['url' => 'cooking','files'=>true]) !!}
                        <fieldset class="form-group">
                            <?=  Form::hidden('ID_Composition', $menu->ID_Composition, ['class' => 'form-control']);?>
                            <?=  Form::hidden('ID_Menu', $menu->ID_Menu, ['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('cooking', 'วิธีการทำอาหาร')!!}
                            <?=  Form::textarea('cooking', null, ['class' => 'form-control', 'placeholder' => '..']);?>
                            {{--<textarea name="details" id="details" rows="5" class="form-control"></textarea>--}}
{{--<!--                            --><?//=  Form::textarea('cooking', null, ['id' => 'cooking','row'=>'5','class' => 'form-control', 'placeholder' => '..']);?>--}}
                        </fieldset>
                        <hr/>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <?=  Form::submit('บันทึก', ['class' => 'btn btn-primary']);?>
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
    <script src="{{ asset('backend/library/ckeditor/ckeditor.js') }}"></script>
    <script>
//        CKEDITOR.replace('cooking'); //.replace ทำการแทนที่ข้อความเป็นอีกข้อความหนึ่งได้
    </script>
@endsection