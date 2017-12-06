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
                            <h2>แก้ไข {{$article->article_id}}</h2>
                        </div>
                        <?= Form::model($article,['url' => ['article/'.$article->article_id],'method' => 'put']) ?>
                        <fieldset class="form-group">
                            {!! Form::label('article_title', 'หัวข้อบทความ')!!}
                            <?=  Form::text('article_title',null,['class' => 'form-control','placeholder'=>'หัวข้อเรื่อง..']);?>
                        </fieldset>
                        <fieldset class="form-group">
                        {!! Form::label('article_detail', 'วิธีการทำอาหาร')!!}
                        <!-- Create the editor container -->
                            <div id="editor">
                                {!! $article->article_detail !!}
                            </div>
                            <?=  Form::textarea('article_detail', null, ['id'=>'output', 'style' => 'display: none;']);?>

                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('article_image', 'รูปภาพ')!!}
                            <?=  Form::file('article_image',null,['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('article_creator', 'ชื่อคนโพส')!!}
                            <?=  Form::text('article_creator',null,['class' => 'form-control','placeholder'=>'ชื่อคนโพส..']);?>
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