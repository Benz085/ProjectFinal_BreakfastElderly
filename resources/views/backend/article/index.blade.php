@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        เพิ่มข้อมูล
                        <a href="{{ url('article/create') }}" class="btn btn-primary btn-sm rounded-s">บทความ</a>
                    </h3>
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-flip-scroll">
                                    <table class="table table-striped table-bordered table-hover flip-content">
                                        <thead class="flip-header">
                                        <tr>
                                            <th>หัวข้อ</th>
                                            <th>ว/ด/ป ล่าสุด</th>
                                            <th>ผู้โพส</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($article as $value)
                                            <tr class="odd gradeA">
                                                <td>{{ $value->article_title }}</td>
                                                <td>{{ $value->article_updatatime }}</td>
                                                <td>{{ $value->article_creator }}</td>
                                                <td>
                                                    <div class="col-md-2">
                                                        <a  href="{{url('article/'.$value->article_id.'/edit')}}">
                                                            <button class="btn btn-pill-left btn-warning">แก้ไข</button>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2" style="margin-left: 5px;">
                                                        <?= Form::open(['url' => ['article/'. $value->article_id],'method' => 'delete']) ?>
                                                        <button type="submit"  class="btn btn-pill-right btn-danger">ลบ</button>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
