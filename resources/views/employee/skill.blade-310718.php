@extends('employee.masteremployee')

@section('active_skill', 'active2')

@section('em_header', 'Kemampuan')

@section('em_body')
  <script type="text/javascript">
  $(document).ready(function() {
    $("#e1").select2();
  });
  </script>
  <script src="{{ asset('js/skill.js') }}"></script>
  {!! Form::open(['route'=>['skills.store'], 'method' => 'post', 'id' => 'form1']) !!}
  {!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}

  <style type="text/css" media="screen">
  .select2-container .select2-selection {
    height: 30px;
  }

  [class^='select2'] {
    border-radius: 0px !important;
  }
</style>

@if (session('success'))
  <div class="alert alert-success">
    <a>{{ session('success') }}</a>
  </div>
@endif

<!-- @if ($skills != null)
@foreach ($skills as $skill)
<div class="row">
<div class="col-md-8">
<div><a>Kemampuan</a></div>
<div>{!! Form::text('skill[]', $skill->skill, ['class'=>'form-control']) !!}</div>
</div>

<div class="col-md-3">
<div><a>Durasi</a></div>
<div>{!! Form::select('year[]', $years, $skill->year, ['class' => 'form-control', 'placeholder' => '...']) !!}</div>
</div>

<div class="col-md-1">
<div><a>&nbsp</a></div>
<a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
</div>
</div>
@endforeach

@endif -->

<div class="group-input" id="form_kemampuan">

  <div class="panel panel-success">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <div><a>Position</a></div>
          <div class="autocomplete" style="width: 100%">
            {{-- <input id="position1" class="form-control input-sm" type="text" name="position[]" placeholder="Country" autocomplete="off"> --}}
            <select id="e1">
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div><a>Sub Position</a></div>
          <div class="autocomplete" style="width: 100%">
            <input id="subposition1" class="form-control input-sm" type="text" name="subposition[]" placeholder="Subposition" autocomplete="off">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div><a>Kemampuan</a></div>
          <div><input id="skill1" class="form-control input-sm" type="text" name="skill[]" placeholder="Skill"></div>
        </div>

        <div class="col-md-3">
          <div><a>Durasi</a></div>
          <div>
            <select name="years[]" class="form-control input-sm">
              <option value="">...</option>
              <option value="1">1 Tahun</option>
              <option value="2">2 Tahun</option>
              <option value="3">3 Tahun</option>
              <option value="4">4 Tahun</option>
              <option value="5">5 Tahun</option>
              <option value="6">> 5 Tahun</option>
            </select>
          </div>
        </div>

        <div class="col-md-1">
          <div><a>&nbsp</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="row">
  <div class="col-md-12">
  <select id="position1" name="position" class="form-control">
  <option value=""></option>
  <option value="Jakarta"><a>Jakarta</a></option>
  <option value="Bogor"><a>Bogor</a></option>
  <option value="Depok"><a>Depok</a></option>
</select>

<div class="autocomplete" style="width: 100%">
<input id="myInput" class="form-control input-sm position" type="text" name="myCountry" placeholder="Country">
</div>

<div class="autocomplete" style="width: 100%">
<input id="subposition" class="form-control input-sm" type="text" name="subposition" placeholder="Subposition">
</div>
</div>
</div> -->

{{--
<form autocomplete="off" action="/action_page.php">
<div class="autocomplete">
<input id="myInput" class="form-control" type="text" name="myCountry" placeholder="Country">
</div>
<input type="submit">
</form> --}}
</div>

<div class="text-left">
  <a href="#" class="btn btn-warning" id="bt_tambah"><i class="fa fa-plus" aria-hidden="true"></i></a>
</div>

<hr>
<div class="group-input">
  <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
</div>

{!! Form::close() !!}
@stop
