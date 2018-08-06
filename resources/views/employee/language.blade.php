@extends('employee.masteremployee')

@section('active_language', 'active2')

@section('em_header', 'Bahasa')

@section('em_body')

  <script type="text/javascript">
  $(document).ready(function() {
    var pointer = 1;

    $('#bt_tambah').click(function(event) {
      var subposition;
      pointer += 1;

      $('#form_language').append('<div class="panel panel-success">' +
      '<div class="panel-body">' +
      '<div class="row">' +
      '<div class="col-md-8">' +
      '<div><a>Kemampuan</a></div>' +
      '<div>{{ Form::select('language[]', $langs, null, ['class' => 'form-control input-sm', 'placeholder' => '...']) }}</div>' +
      '</div>' +

      '<div class="col-md-3">' +
      '<div><a>Level Kemampuan</a></div>' +
      '<div>{{
        Form::select('score[]', $scores, null, ['class' => 'form-control input-sm', 'placeholder' => '...'])
      }}</div>' +
      '</div>' +

      '<div class="col-md-1">' +
      '<div><a>&nbsp</a></div>' +
      '<a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</div>');

    });
  });
</script>

{!! Form::open(['route'=>['languages.store'], 'method' => 'post', 'id' => 'form1']) !!}

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

@if (session('error'))
  <div class="alert alert-danger">
    <a>{{ session('error') }}</a>
  </div>
@endif

<div class="group-input" id="form_language">

  @if (!is_null($languages) and !session('error'))
    @foreach ($languages as $language)

      <div class="panel panel-success">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-8">
              <div><a>Bahasa</a></div>
              <div>
                {{
                  Form::select('language[]', $langs, $language['language'], ['class' => 'form-control input-sm', 'placeholder' => '...'])
                }}
              </div>
            </div>

            <div class="col-md-3">
              <div><a>Level Kemampuan</a></div>
              <div>
                {{
                  Form::select('score[]', $scores, $language['score'], ['class' => 'form-control input-sm', 'placeholder' => '...'])
                }}
              </div>
            </div>

            <div class="col-md-1">
              <div><a>&nbsp</a></div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
  @endif

  @if (!is_null(old('language')))

    @php
    echo old('language')[0];
    @endphp

    @for ($i=0; $i<count(old('language')); $i++)
      @php
      $old_language = old("language.$i");
      $old_score = old("score.$i");

      echo count(old('language'));
      @endphp
      <div class="panel panel-success">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-8">
              <div><a>Bahasa</a></div>
              <div>
                {{
                  //Form::select('language[]', $langs, null, ['class' => 'form-control input-sm', 'placeholder' => '...'])
                  Form::text('language[]', old("language.$i"), ['class' => 'form-control input-sm', 'placeholder' => '...'])
                }}
              </div>
            </div>

            <div class="col-md-3">
              <div><a>Level Kemampuan</a></div>
              <div>
                {{
                  Form::select('score[]', $scores, null, ['class' => 'form-control input-sm', 'placeholder' => '...'])
                }}
              </div>
            </div>

            <div class="col-md-1">
              <div><a>&nbsp</a></div>
            </div>
          </div>
        </div>
      </div>
    @endfor
  @endif

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
