@extends('layouts.admin')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block" align="center">
                                <h3> สำรับอาหารเช้าของผู้สูงอายุ เพศหญิง วัย 70+ ปี</h3>
                                <p>  จำนวนสำรับทั้งหมด : {{ $countALL }} </p>
                            </div>
                            <div class="row">
                                @foreach($count as $counts)
                                <div class="col-sm-3 col-md-3">
                                    <div class="thumbnail"><img alt="100%x200" data-src="holder.js/100%x200"
                                                                style="height: 140px; width: 100%; display: block;"
                                                                src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTg5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDU4OSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlMWZjYTc1ZjYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToyOXB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWUxZmNhNzVmNiI+PHJlY3Qgd2lkdGg9IjU4OSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIyMTkuMjUiIHk9IjExMi45Ij41ODl4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                                                data-holder-rendered="true">
                                        <div class="caption"><h3>สำรับอาหารเช้า.</h3>
                                            <p>สำรับอาหารชุดที่ : {{ $counts->ID_Deck }}</p>
                                            <p>จำนวนเมนู : {{ $counts->count_Deck }}</p>
                                            <p>
                                                <a href="{{url('deck/'.$counts->ID_Deck)}}" class="btn btn-pill-left btn-success" role="button">ดูข้อมูล</a>
                                                <a href="#" class="btn btn-info" role="button">แก้ไข</a>
                                                <a href="#" class="btn btn-pill-right btn-danger" role="button">ลบ</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div align="center">{!! $count->render()!!}</div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
