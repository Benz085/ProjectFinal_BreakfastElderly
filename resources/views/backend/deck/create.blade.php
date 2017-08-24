@extends('layouts.admin')
@section('head')
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    <meta name="csrf-token" content="{{ Session::token() }}">
    <link rel="stylesheet" id="theme-style" href="{{ asset('backend/css/multi-select.css') }}">
    <style>
        .pickListButtons {
            padding: 10px;
            text-align: center;
        }

        .pickListButtons button {
            margin-bottom: 5px;
        }

        .pickListSelect {
            height: 200px !important;
        }
    </style>
@endsection
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 style="margin:auto"> ข้อมูลเมนูอาหารเช้า ผู้สูงอายุ</h3>
                        </div>
                        <select multiple class="form-control" style="height: 250px">
                            @foreach($data as $menu)
                                <option>{{ $menu->food_name }} - {{ $menu->Menu_Name }} </option>
                            @endforeach
                        </select>
                        <hr>
                        <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">PickList Demo</h3>
                                </div>
                                <div class="panel-body">
                                    <form id="inputpickListResult" method="POST">
                                        <div id="pickList"></div>
                                        <br>
                                        <br>
                                        <button class="btn btn-primary" name="submit" id="getSelected">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        (function ($) {

            $.fn.pickList = function (options) {

                var opts = $.extend({}, $.fn.pickList.defaults, options);

                this.fill = function () {
                    var option = '';

                    $.each(opts.data, function (key, val) {
                        option += '<option  value='+ val.ID_Menu +'>' + val.Menu_Name + '</option>';
                    });
                    this.find('#pickData').append(option);
                };
                this.controll = function () {
                    var pickThis = this;

                    $("#pAdd").on('click', function () {
                        var p = pickThis.find("#pickData option:selected");
                        p.clone().appendTo("#pickListResult");
                        p.remove();
                    });

                    $("#pAddAll").on('click', function () {
                        var p = pickThis.find("#pickData option");
                        p.clone().appendTo("#pickListResult");
                        p.remove();
                    });

                    $("#pRemove").on('click', function () {
                        var p = pickThis.find("#pickListResult option:selected");
                        p.clone().appendTo("#pickData");
                        p.remove();
                    });

                    $("#pRemoveAll").on('click', function () {
                        var p = pickThis.find("#pickListResult option");
                        p.clone().appendTo("#pickData");
                        p.remove();
                    });
                };
                this.getValues = function () {
                    var objResult = [];
                    this.find("#pickListResult option").each(function () {
                        objResult.push({
                            id: this.value,
                            text: this.text
                        });
                    });
                    return objResult;
                };
                this.init = function () {
                    var pickListHtml =
                        "<div class='row'>" +
                        "  <div class='col-sm-5'>" +
                        "	 <select class='form-control pickListSelect' id='pickData' multiple></select>" +
                        " </div>" +
                        " <div class='col-sm-2 pickListButtons'>" +
                        "	<button id='pAdd' class='btn btn-primary btn-sm'>" + opts.add + "</button><br>" +
//                        "      <button id='pAddAll' class='btn btn-primary btn-sm'>" + opts.addAll + "</button>" +
                        "	<button id='pRemove' class='btn btn-primary btn-sm'>" + opts.remove + "</button>" +
                        "	<button id='pRemoveAll' class='btn btn-primary btn-sm'>" + opts.removeAll + "</button>" +
                        " </div>" +
                        " <div class='col-sm-5'>" +
//                            " <form method='post' id='inputpickListResult'>"+
                        "    <select class='form-control pickListSelect' id='pickListResult'  name='pickList[]' multiple></select>" +
//                            " </form>"+
                        " </div>" +
                        "</div>";

                    this.append(pickListHtml);

                    this.fill();
                    this.controll();
                };

                this.init();
                return this;
            };

            $.fn.pickList.defaults = {
                add: 'Add',
                addAll: 'Add All',
                remove: 'Remove',
                removeAll: 'Remove All'
            };


        }(jQuery));

        var val = JSON.parse('<?php echo json_encode($json) ?>');
        console.log(val);


        var pick = $("#pickList").pickList({
            data: val
        });

        $("#getSelected").click(function () {
            // deck/store
            axios.post('<?php echo url('/deck/store') ?>', { idDeck:pick.getValues()})
                .then(function(response) {
                    window.location.href = '<?php echo url('/deck/index') ?>';
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });

        });
    </script>
    <script>
        axios.post('/deck/store', {
            firstName: 'Fred',
            lastName: 'Flintstone'
        })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    </script>
    <script type="text/javascript">
        $('#inputpickListResult').on('submit', function () {
            $.ajax({
                type: "POST",
                url: "./store",
                data: {selectedpickList: $('input#pickList').val()},
                success: function (data) {
                    alert(data);
                }
            });
            return false;
        })
    </script>
@endsection