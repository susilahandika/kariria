@extends('employee.masteremployee')

@section('active_education', 'active2')

@section('em_header', 'Pendidikan')

@section('em_body')

    {!! Form::open(['route'=>['educations.store'], 'method' => 'post', 'id' => 'form1']) !!}

    {!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}

    @if (session('success'))
        <div class="alert alert-success">
            <a>{{ session('success') }}</a>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            <a>{{ session('error') }}</a>
        </div>
    @endif

    @if ($educations)
        @foreach ($educations as $education)

            <div id="contents">
                <div class="panel panel-default box">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="">Jenjang</label>
                            {!! Form::select('level[]', $levels, $education['level'], ['placeholder' => '...', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label for="">Nama Sekolah/Universitas/Perguruan Tinggi</label>
                            {!! Form::text('education_loc[]', $education['education_loc'], ['class'=>'form-control input-sm']) !!}
                        </div>

                        <div class="row group-input">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    {!! Form::text('major[]', $education['major'], ['class'=>'form-control input-sm']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nilai</label>
                                    {!! Form::text('value[]', $education['value'], ['class'=>'form-control input-sm']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row group-input">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    {!! Form::date('from_date[]', $education['from_date'], ['class'=>'form-control input']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hingga</label>
                                    {!! Form::date('to_date[]', $education['to_date'], ['class'=>'form-control input']) !!}
                                </div>
                            </div>
                        </div>

                        <div id="area-del-content"></div>
                    </div>

                </div>
            </div>

        @endforeach

    @else
        <div id="contents">
            <div class="panel panel-default box">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">Jenjang</label>
                        {!! Form::select('level[]', $levels, null, ['placeholder' => '...', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="">Nama Sekolah/Universitas/Perguruan Tinggi</label>
                        {!! Form::text('education_loc[]', null, ['class'=>'form-control input-sm']) !!}
                    </div>

                    <div class="row group-input">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                {!! Form::text('major[]', null, ['class'=>'form-control input-sm']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nilai</label>
                                {!! Form::text('value[]', null, ['class'=>'form-control input-sm']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row group-input">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Dari</label>
                                {!! Form::date('from_date[]', null, ['class'=>'form-control input']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Hingga</label>
                                {!! Form::date('to_date[]', null, ['class'=>'form-control input']) !!}
                            </div>
                        </div>
                    </div>

                    <div id="area-del-content"></div>
                </div>

            </div>
        </div>
    @endif

    <div id="copyContents"></div>

    <div class="">
        {{-- <button class="btn btn-primary" id="add">add a dropdown</button> --}}
        <a class="btn btn-warning btn-sm" id="add" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div> <hr>

    <div class="group-input">
        <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
    </div>

    {!! Form::close() !!}

    <script>
    function getDateNow(){
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;

        return today;
    }

    $(document).ready(function () {
        $('select').select2();

        $("#add").click(function () {

            $myClone = $("#contents").clone()
            .appendTo('#copyContents');

            $myClone.find("span").remove();
            $myClone.find('input[type="text"]').val("").end();
            $myClone.find('input[type="date"]').val(getDateNow()).end();
            $myClone.find('textarea').val("").end();
            $myClone.find('select').select2({
                width: '100%',
            });
            $myClone.find('#area-del-content')
            .append(
                '<div class="pull-right">' +
                '<a href="#" id="del-content" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
                '</div>'
            );
        });

        $("body").on('click', '#del-content', function(event) {
            event.preventDefault();
            $(this).parents(':eq(3)').remove();
        });
    });
    </script>

@stop
