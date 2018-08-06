@extends('employee.masteremployee')

@section('active_education', 'active2')

@section('em_header', 'Pendidikan Terakhir')

@section('em_body')

{!! Form::open(['route'=>['educations.update', Auth::user()->email], 'method' => 'put']) !!}

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

    <div class="group-input">
        <div class="group-input">
            <div><a>Jenjang</a></div>
            <div>
                {{ Form::select('level_id', $levels, $education[0]['level_id'], ['class' => 'form-control', 'placeholder' => '...']) }}
            </div>
        </div>

        <!-- <div class="row group-input">
            <div class="col-md-6">
                <div><a>Provinsi</a></div>
                <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
            </div>
        
            <div class="col-md-6">
                <div><a>Kabupaten</a></div>
                <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
            </div>
        </div> -->

        <div class="group-input">
            <div><a>Nama Sekolah/Universitas/Perguruan Tinggi</a></div>
            <div>{!! Form::text('education_loc', $education[0]['education_loc'], ['class'=>'form-control input-sm']) !!}</div>
        </div>

        <div class="row group-input">
            <div class="col-md-6">
                <div><a>Jurusan</a></div>
                <div>{!! Form::text('major', $education[0]['major'], ['class'=>'form-control input-sm']) !!}</div>
            </div>

            <div class="col-md-6">
                <div><a>IPK / Nilai</a></div>
                <div>{!! Form::text('value', $education[0]['value'], ['class'=>'form-control input-sm']) !!}</div>
            </div>
        </div>

        <div class="row group-input">
            <div class="col-md-6">
                <div><a>Dari</a></div>
                <div>
                    {!! Form::date('from_date', $education[0]['from_date'], ['class'=>'form-control input']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div><a>Hingga</a></div>
                <div>
                    {!! Form::date('to_date', $education[0]['to_date'], ['class'=>'form-control input']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="text-right">
    <a href="" class="btn btn-warning">Tambah</a>
</div> -->

<hr>
<div class="group-input">
    <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
</div>

{!! Form::close() !!}

@stop