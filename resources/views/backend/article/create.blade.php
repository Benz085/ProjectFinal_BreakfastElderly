@extends('layouts.admin')
@section('head')
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-8">
                    <div class="card card-block" style="height: auto">
                        <div class="title-block">
                            <h2>สร้างบทความ</h2>
                        </div>
                        {!! Form::open(['url' => 'article','files'=>true]) !!}
                        <fieldset class="form-group">
                            {!! Form::label('title', 'หัวข้อบทความ')!!}
                            <?=  Form::text('title',null,['class' => 'form-control','placeholder'=>'หัวข้อเรื่อง..']);?>
                        </fieldset>
                        <fieldset class="form-group">
                        {!! Form::label('cooking', 'วิธีการทำอาหาร')!!}
                        <!-- Create the editor container -->
                            <div id="editor">
                            </div>
                            <?=  Form::textarea('detail', null, ['id'=>'output', 'style' => 'display: none;']);?>

                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('image', 'รูปภาพ')!!}
                            <?=  Form::file('image',null,['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('creator', 'ชื่อคนโพส')!!}
                            <?=  Form::text('creator',null,['class' => 'form-control','placeholder'=>'ชื่อคนโพส..']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('resource', 'ลิงค์ Youtube')!!}
                            <?=  Form::text('resource',null,['class' => 'form-control','placeholder'=>'..']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('resource', 'แหล่งที่มา')!!}
                            <?=  Form::text('resource',null,['class' => 'form-control','placeholder'=>'แหล่งที่มา..']);?>
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


    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>
    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        $(function() {
            $('#output').html($('#editor .ql-editor').html());
            $('#editor .ql-editor').keypress(function() {
                $('#output').html($(this).html());
            });
        });
    </script>
@endsection