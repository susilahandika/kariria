@extends('masteradmin')

@section('header', 'Company Profile')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Company Profile</li>
@stop

@section('setting', 'active')
@section('cprofile', 'active')

@section('body')

	@if (session('success'))
		<div class="alert alert-warning">
			{{ session('success') }}
		</div>
	@endif

	{!! Form::open(['route'=>['cprofiles.update', $company[0]['email']], 'method' => 'put', 'id' => 'form1']) !!}

	<div class="box">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" class="form-control" value="{{ $company[0]['email'] }}" readonly>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Nama Perusahaan</label>
						<input type="text" name="name" class="form-control" value="{{ $company[0]['name'] }}">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Alamat</label>
						<textarea name="address" class="form-control" rows="8" cols="80">{{ $company[0]['address'] }}</textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Telp</label>
						<input type="text" name="telp" class="form-control" value="{{ $company[0]['telp'] }}">
					</div>
				</div>
			</div>

			<div class="group-input">
				<div class=""><button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Simpan</button></div>
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@stop
