@extends('layouts.admin')
@section('head')
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
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
                            <h2 style="margin-left: 50px;"> เพิ่มข้อมูล  </h2>
                        </div>
                        <select id='optgroup' multiple='multiple'>
                            <optgroup label='Friends'>
                                <option value='1'>Yoda</option>
                                <option value='2'>Obiwan</option>
                            </optgroup>
                            <optgroup label='Enemies'>
                                <option value='3'>Palpatine</option>
                                <option value='4' disabled>Darth Vader</option>
                            </optgroup>
                        </select>
                        <hr>
                        <br>
                        <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">PickList Demo</h3>
                                </div>
                                <div class="panel-body">

                                    <div id="pickList"></div>

                                    <br>
                                    <br>
                                    <button class="btn btn-primary" id="getSelected">Get Selected</button>
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
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

    <script src="{{ asset('backend/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript">
        // run pre selected options
        $('#optgroup').multiSelect({ selectableOptgroup: true });
    </script>
    <script type="text/javascript">
        (function($) {

            $.fn.pickList = function(options) {

                var opts = $.extend({}, $.fn.pickList.defaults, options);

                this.fill = function() {
                    var option = '';

                    $.each(opts.data, function(key, val) {
                        option += '<option id=' + val.id + '>' + val.text + '</option>';
                    });
                    this.find('#pickData').append(option);
                };
                this.controll = function() {
                    var pickThis = this;

                    $("#pAdd").on('click', function() {
                        var p = pickThis.find("#pickData option:selected");
                        p.clone().appendTo("#pickListResult");
                        p.remove();
                    });

                    $("#pAddAll").on('click', function() {
                        var p = pickThis.find("#pickData option");
                        p.clone().appendTo("#pickListResult");
                        p.remove();
                    });

                    $("#pRemove").on('click', function() {
                        var p = pickThis.find("#pickListResult option:selected");
                        p.clone().appendTo("#pickData");
                        p.remove();
                    });

                    $("#pRemoveAll").on('click', function() {
                        var p = pickThis.find("#pickListResult option");
                        p.clone().appendTo("#pickData");
                        p.remove();
                    });
                };
                this.getValues = function() {
                    var objResult = [];
                    this.find("#pickListResult option").each(function() {
                        objResult.push({
                            id: this.id,
                            text: this.text
                        });
                    });
                    return objResult;
                };
                this.init = function() {
                    var pickListHtml =
                        "<div class='row'>" +
                        "  <div class='col-sm-5'>" +
                        "	 <select class='form-control pickListSelect' id='pickData' multiple></select>" +
                        " </div>" +
                        " <div class='col-sm-2 pickListButtons'>" +
                        "	<button id='pAdd' class='btn btn-primary btn-sm'>" + opts.add + "</button>" +
                        "      <button id='pAddAll' class='btn btn-primary btn-sm'>" + opts.addAll + "</button>" +
                        "	<button id='pRemove' class='btn btn-primary btn-sm'>" + opts.remove + "</button>" +
                        "	<button id='pRemoveAll' class='btn btn-primary btn-sm'>" + opts.removeAll + "</button>" +
                        " </div>" +
                        " <div class='col-sm-5'>" +
                        "    <select class='form-control pickListSelect' id='pickListResult' multiple></select>" +
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


        var val = {
            01: {
                id: 01,
                text: 'Isis'
            },
            02: {
                id: 02,
                text: 'Sophia'
            },
            03: {
                id: 03,
                text: 'Alice'
            },
            04: {
                id: 04,
                text: 'Isabella'
            },
            05: {
                id: 05,
                text: 'Manuela'
            },
            06: {
                id: 06,
                text: 'Laura'
            },
            07: {
                id: 07,
                text: 'Luiza'
            },
            08: {
                id: 08,
                text: 'Valentina'
            },
            09: {
                id: 09,
                text: 'Giovanna'
            },
            10: {
                id: 10,
                text: 'Maria Eduarda'
            },
            11: {
                id: 11,
                text: 'Helena'
            },
            12: {
                id: 12,
                text: 'Beatriz'
            },
            13: {
                id: 13,
                text: 'Maria Luiza'
            },
            14: {
                id: 14,
                text: 'Lara'
            },
            15: {
                id: 15,
                text: 'Julia'
            }
        };

        var pick = $("#pickList").pickList({
            data: val
        });

        $("#getSelected").click(function() {
            console.log(pick.getValues());
        });
    </script>
@endsection