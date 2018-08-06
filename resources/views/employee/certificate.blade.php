@extends('employee.masteremployee')

@section('active_certificate', 'active2')

@section('em_header', 'Sertifikat')

@section('em_body')

{!! Form::open(['route'=>['certificates.store'], 'method' => 'post', 'id' => 'form1']) !!}

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

@if (!is_null($certificates) and !session('error'))
  @foreach ($certificates as $certificate)

    <div class="" id="contents">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group">
            <label for="">Nama Sertifikat</label>
            {!! Form::text('certificate_name[]', $certificate['certificate_name'], ['class'=>'form-control input-sm']) !!}
          </div>

          <div class="form-group">
            <label for="">Tanggal Pelaksanaan</label>
            {{ Form::date('certificate_date[]', $certificate['certificate_date'], ['class'=>'form-control input-sm']) }}
          </div>

          {{-- <div class="form-group">
            <label for="">Level</label>
            {{ Form::select('level', $data, null, ['placeholder' => 'Select education level', 'class' => 'form-control']) }}
          </div> --}}

          <div id="area-del-content"></div>

        </div>
      </div>
    </div>

  @endforeach
@endif

<div id="copyContents"></div>

<div class="">
  {{-- <button class="btn btn-primary" id="add">add a dropdown</button> --}}
  <a class="btn btn-warning btn-sm" id="add" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
</div> <hr>

<div class="">
  {{-- <button class="btn btn-primary" id="add">add a dropdown</button> --}}
  <input type="submit" name="submit" value="Save" class="btn btn-primary">
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
