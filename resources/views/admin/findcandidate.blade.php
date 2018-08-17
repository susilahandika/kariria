@extends('masteradmin')

@section('header', 'Find Employee')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Find Candidate</li>
@stop

@section('mn_findemployee', 'active')

@section('body')

	{!! Form::open(['route'=>['candidates.find'], 'method' => 'get', 'id' => 'form1']) !!}

	<div class="box">
		<div class="box-body">
			<div class="form-group">
			  <label for="">Kemampuan</label>
			  {!! Form::select('skill[]', $skill_types, null, [ 'placeholder' => null, 'class' => 'form-control input-lg', 'multiple' => 'multiple']) !!}
			</div>

			<div class="group-input">
			  <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
			</div>
		</div>
	</div>

	{!! Form::close() !!}

	<script type="text/javascript">
		$(document).ready(function() {
			$('select').select2({
				placeholder: '...',
				tags: true
			});
		});
	</script>

@stop
