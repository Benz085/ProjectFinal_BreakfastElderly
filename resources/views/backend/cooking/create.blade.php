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
                            <h2> วิธีการทำอาหาร : {{ $menu->Menu_Name }}</h2>
                        </div>
                        {!! Form::open(['url' => 'cooking','files'=>true]) !!}
                        <fieldset class="form-group">
                            <?=  Form::hidden('ID_Composition', $menu->ID_Composition, ['class' => 'form-control']);?>
                            <?=  Form::hidden('ID_Menu', $menu->ID_Menu, ['class' => 'form-control']);?>
                        </fieldset>
                        <fieldset class="form-group">
                            {!! Form::label('cooking', 'วิธีการทำอาหาร')!!}
                            <!-- Create the editor container -->
                                <div id="editor">
                                    <p>Hello World!</p>
                                </div>
                            <?=  Form::textarea('cooking', null, ['id'=>'output', 'style' => 'display: none;']);?>

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
    <script>
//        CKEDITOR.replace('cooking'); //.replace ทำการแทนที่ข้อความเป็นอีกข้อความหนึ่งได้
    </script>

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