@extends('employee.masteremployee')

@section('active_profile', 'active2')

@section('em_header', 'Identitas Diri')

@section('em_body')

{!! Form::open(['url' => '#', 'method' => 'post']) !!}

<div class="panel panel-default box">
<div class="group-input">
    <div><a>Nama lengkap</a></div>
    <div>{!! Form::text('id', null, ['class'=>'form-control input-sm']) !!}</div>
</div>

<div class="group-input">
    <div><a>Nomer Telepon</a></div>
    <div>{!! Form::text('id', null, ['class'=>'form-control input-sm']) !!}</div>
</div>

<div class="group-input">
    <div><a>Email</a></div>
    <div>{!! Form::text('id', null, ['class'=>'form-control input-sm', 'disabled'=>'disabled']) !!}</div>
</div>

<div class="group-input">
    <div><a>Tanggal Lahir</a></div>
    <div>{!! Form::text('id', null, ['class'=>'form-control input-sm']) !!}</div>
</div>

<div class="group-input">
    <div><a>Nomer Telepon</a></div>
    <div>{!! Form::text('id', null, ['class'=>'form-control input-sm']) !!}</div>
</div>

<div class="group-input">
    <div><a>Jenis Kelamin</a></div>
    <div>
        {!! Form::select('status', [
                'L' => 'Laki-laki',
                'P' => 'Perempuan',
            ], null, ['class'=>'form-control', 'placeholder'=>'Pilih...']) !!}
    </div>
</div>

<div class="group-input">
    <div><a>Status Perkawinan</a></div>
    <div>
        {!! Form::select('status', [
                '0' => 'Belum Kawin',
                '1' => 'Sudah Kawin',
            ], null, ['class'=>'form-control', 'placeholder'=>'Pilih...']) !!}
    </div>
</div>

<div class="group-input">
    <div><a>Alamat</a></div>
    <div>{!! Form::textarea('alamat', null, ['class'=>'form-control', 'rows'=>5]) !!}</div>
</div>

</div>

<div class="">
<div>{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}</div>
</div>
{!! Form::close() !!}

@stop