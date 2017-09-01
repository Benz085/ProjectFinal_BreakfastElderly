@extends('layouts.nevber')
@section('head')

    <style>
        .bg-1 {
            /*background-color: #EEE0E5;*/
            border-style:solid;
            color: #ffffff;
            background: rgb(254,255,255); /* Old browsers */
            background: -moz-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(238, 224, 229)), color-stop(100%, rgb(248, 254, 248))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgb(238, 224, 229) 0%, rgb(248, 254, 248) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); /* IE6-9 */
            /* ส่วนการแสดง ผล radius*/
            -webkit-border-radius: 5px;
            border-radius: 5px;
            /*สบ ส่วนการแสดง ผล radius*/
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid bg-1 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn" style="margin-top: 60px">
                  <p style="font-size: 20px;color: #3a3a3a">ระบบสำรับอาหารเช้าผู้สูงอายุ </p>
                </div>
            </div>
            <center>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <div class="col-md-3 col-md-offset-3">
                            <a href="{{ url('quiz/quizFood') }}" class="thumbnail">
                                <img alt="100%x180" data-src="holder.js/100%x180"
                                     style="height: 180px; width: 100%; display: block;"
                                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlMmYwMTljZGYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWUyZjAxOWNkZiI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                     data-holder-rendered="true">
                            </a>
                            <h4 style="color: #411c0e">แบบทดสอบด้านสารอาหาร</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('quiz/create') }}" class="thumbnail">
                                <img alt="100%x180" data-src="holder.js/100%x180"style="height: 180px; width: 100%; display: block;"
                                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlMmYwMWIzZGYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWUyZjAxYjNkZiI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                                     data-holder-rendered="true">
                            </a>
                            <h4 style="color: #411c0e">จัดสำรับอาหาร</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 testimonials-title wow fadeIn" style="margin-top: 60px">
                    </div>
                </div>
            </center>
        </div>
    </div>
@endsection
@section('script')

@endsection