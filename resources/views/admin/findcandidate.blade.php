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
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Kemampuan *</label>
						<select class="form-control input-lg" id="skill" name="skill[]" multiple="multiple" style="width: 100%"></select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Umur Minimal</label>
						<input type="text" class="form-control" name="min_age" value="">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="">Umur Maksimal</label>
						<input type="text" class="form-control" name="max_age" value="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Pendidikan terakhir</label>
						<select class="form-control input-lg" id="level" name="min_education" style="width: 100%"></select>
					</div>
				</div>
			</div>

			<div class="group-input">
				{{-- <div><input type="submit" class="btn btn-primary" name="" value="Cari"></div> --}}
				<div class=""><button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Cari Pelamar</button></div>
			</div>
		</div>
	</div>

	{!! Form::close() !!}

	<script type="text/javascript">
	$(document).ready(function() {
		$('#skill').select2({
			placeholder: '...',
			ajax: {
				url: 'findSkillTypes',
				dataType: 'json',
				data: function (params) {
					return {
						q: $.trim(params.term)
					};
				},
				processResults: function (data) {
					return {
						// results: data
						results:  $.map(data, function (item) {
							return {
								text: item.skill_type,
								id: item.id
							}
						})
					};
				},
				cache: true
			}
		});

		$('#level').select2({
			placeholder: '...',
			ajax: {
				url: 'findLevels',
				dataType: 'json',
				data: function (params) {
					return {
						q: $.trim(params.term)
					};
				},
				processResults: function (data) {
					return {
						// results: data
						results:  $.map(data, function (item) {
							return {
								text: item.level_name,
								id: item.id
							}
						})
					};
				},
				cache: true
			}
		});
	});
	</script>

@stop
