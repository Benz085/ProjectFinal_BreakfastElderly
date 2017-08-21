@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3> กลุ่มอาหาร  จำนวนกลุ่มทั้งหมด {{$count}} </h3><br>
                                <h4> จำนวนกลุ่มทั้งหมด : {{$count}} </h4>
                            </div>
                            <section class="example">
                                <div class="table-flip-scroll">
                                    <table class="table table-striped table-bordered table-hover flip-content">
                                        <thead class="flip-header">
                                        <tr>
                                            <th>รหัสกลุ่มอาหาร</th>
                                            <th>ชื่อกลุ่มอาหาร</th>
                                            <th>จัดการข้อมูล</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($groups as $group)
                                        <tr class="odd gradeA">
                                            <td>{{ $group->id }}</td>
                                            <td>{{ $group->food_name }}</td>
                                            <td>
                                                <button type="button" class="btn btn-pill-left btn-warning">แก้ไข</button>
                                                <button type="button" class="btn btn-pill-right btn-danger">ลบ</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                   {!! $groups->render() !!}
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
