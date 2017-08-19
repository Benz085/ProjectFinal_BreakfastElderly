@extends('layouts.admin')

@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3 class="title"> Hashtag อาหาร ใน Twitter </h3>
                            </div>
                            <section class="example">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hashtag</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#Hashtag</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>#Hashtag</td>
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
