@extends('employee.masteremployee')

@section('active_profile', 'active2')

@section('em_header', 'Identitas Diri')

@section('em_body')

  {!! Form::open(['route'=>['identities.update', $identity[0]['email']], 'method' => 'put', 'enctype'=>'multipart/form-data']) !!}

  <div class="panel panel-default box">

    @if (session('success'))
      <div class="alert alert-success">
        <a>{{ session('success') }}</a>
      </div>
    @endif

    @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li><a>{{  $error }}</a></li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="form-group">
      @php
      $path_img = '/images/userPhoto/' . $identity[0]['photo'];
      @endphp

      <img src="{{ URL::asset($path_img) }}" width="128" height="128">

    </div>

    <div class="group-input">
      <div><a>Photo</a></div>
      <div><input type="file" class="form-control" id="photo" name="photo"></div>
    </div>

    <div class="group-input">
      <div><a>Nama lengkap*</a></div>
      <div>{!! Form::text('name', $identity[0]['name'], ['class'=>'form-control input-sm']) !!}</div>
    </div>

    <div class="group-input">
      <div><a>Nomer Telepon *</a></div>
      <div>{!! Form::text('telp', $identity[0]['telp'], ['class'=>'form-control input-sm']) !!}</div>
    </div>

    <div class="group-input">
      <div><a>Email *</a></div>
      <div>{!! Form::text('email', $identity[0]['email'], ['class'=>'form-control input-sm', 'readonly'=>'readonly']) !!}</div>
    </div>

    <div class="group-input">
      <div><a>Tanggal Lahir *</a></div>
      {{-- <div>{!! Form::text('birthday', null, ['class'=>'form-control input-sm']) !!}</div> --}}
      <div>{!! Form::date('birthday', $identity[0]['birthday'], ['class'=>'form-control input-sm']) !!}</div>
    </div>

    <div class="group-input">
      <div><a>Jenis Kelamin *</a></div>
      <div>
        {!! Form::select('gender', [
          'L' => 'Laki-laki',
          'P' => 'Perempuan',
        ], $identity[0]['gender'], ['class'=>'form-control', 'placeholder'=>'Pilih...']) !!}
      </div>
    </div>

    <div class="group-input">
      <div><a>Status Perkawinan *</a></div>
      <div>
        {!! Form::select('married', [
          '0' => 'Belum Kawin',
          '1' => 'Sudah Kawin',
        ], $identity[0]['married'], ['class'=>'form-control', 'placeholder'=>'Pilih...']) !!}
      </div>
    </div>

    <div class="group-input">
      <div><a>Alamat *</a></div>
      <div>{!! Form::textarea('address', $identity[0]['address'], ['class'=>'form-control', 'rows'=>5]) !!}</div>
    </div>

    <div class="group-input">
      <a>* Harus diisi</a>
    </div>

  </div>

  <div class="">
    <div>{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}</div>
  </div>
  {!! Form::close() !!}

@stop
