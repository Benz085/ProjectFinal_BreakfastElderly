@extends('layouts.admin')

@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3 class="title">ข้อมูล Hashtag Twitter อาหาร && ระบบแนะนำ</h3>
                            </div>
                            <section class="example">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hashtag</th>
                                        <th>ระดับความพึงพอใจ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#Hashtag</td>
                                        <td>ชอบมาก</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>#Hashtag</td>
                                        <td>ปกติ</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
