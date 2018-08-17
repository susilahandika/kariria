@extends('employee.masteremployee')

@section('active_skill', 'active2')

@section('em_header', 'Kemampuan')

@section('em_body')

    {!! Form::open(['route'=>['skills.store'], 'method' => 'post', 'id' => 'form1']) !!}

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

    @if ($userSkills)
        @foreach ($userSkills as $userSkill)

            <div id="contents">
                <div class="panel panel-default box">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="">Skill</label>
                                    {!! Form::select('skill[]', $skill_types, $userSkill['skill'], ['placeholder' => '...', 'class' => 'form-control input-sm']) !!}
                                </div>
                                <div class="col-md-3">
                                    <label for="">Durasi</label>
                                    {!! Form::select('score[]', $scores, $userSkill['score'], ['placeholder' => '...', 'class' => 'form-control input-sm']) !!}
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
                        <div class="row">
                            <div class="col-md-9">
                                <label for="">Skill</label>
                                {!! Form::select('skill[]', $skill_types, null, ['placeholder' => '...', 'class' => 'form-control input-sm']) !!}
                            </div>
                            <div class="col-md-3">
                                <label for="">Durasi</label>
                                {!! Form::select('score[]', $scores, null, ['placeholder' => '...', 'class' => 'form-control input-sm']) !!}
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
