@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3> กลุ่มอาหาร  จำนวนกลุ่มทั้งหมด {{$countALL}} </h3>
                            </div>
                            <section class="example">
                                <div class="table-flip-scroll">
                                    <div class="col-md-8">
                                        <table class="table table-striped table-bordered table-hover flip-content">
                                            <thead class="flip-header">
                                            <tr>
                                                <th>สำรับ</th>
                                                <th>จำนวนอาหาร</th>
                                                <th>จัดการข้อมูล</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($dataDecks as $data)
                                                <tr class="odd gradeA">
                                                    <td>สำรับที่  :  {{ $data->ID_Deck }}</td>
                                                    <td>{{ $data->count_Deck }} เมนู</td>
                                                    <td>
                                                        <a href="{{url('deck/getRule/'.$data->ID_Deck.'')}}">
                                                            <button type="button" class="btn btn-oval btn-primary">จัดกฏแพ้อาหาร</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        {!! $dataDecks->render() !!}
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-striped table-bordered table-hover flip-content">
                                            <thead class="flip-header">
                                            <tr>
                                                <th>สำรับ</th>
                                                <th>สถานะข้อมูล</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($isActive as $data)
                                                <tr class="odd gradeA">
                                                    <td>สำรับที่ :{{ $data->ID_Deck }}</td>
                                                    <td>
                                                        @if($data->isActive)
                                                            <button type="button" class="btn btn-success btn-sm">success</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
