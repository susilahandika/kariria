@extends('employee.masteremployee')

@section('active_experience', 'active2')

@section('em_header', 'Pengalaman Kerja')

@section('em_body')

	{{-- <script src="{{ asset('js/experience.js') }}"></script> --}}

	{!! Form::open(['route'=>['experiences.store'], 'method' => 'post', 'id' => 'form1']) !!}

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

	{{-- @if (!is_null($experiences) and !session('error')) --}}
	@if ($experiences)
		@foreach ($experiences as $experience)

			<div id="contents">
				<div class="panel panel-default box">
					<div class="panel-body">
						<div class="form-group">
							<label for="">Nama Perusahaan</label>
							{!! Form::text('company[]', $experience['company'], ['class'=>'form-control input-sm']) !!}
						</div>

						<div class="form-group">
							<label for="">Bidang Kerja</label>
							{!! Form::text('scope[]', $experience['scope'], ['class'=>'form-control input-sm']) !!}
						</div>

						<div class="form-group">
							<label for="">Posisi</label>
							{!! Form::select('position[]', $positions, $experience['position'], ['placeholder' => '...', 'class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							<label for="">Pengalaman Kerja</label>
							<div class="input-group">
								{!!	Form::date('from_date[]', $experience['from_date'], ['class'=>'form-control input', 'id'=>'sp_from_date'])
									!!}
									<a class="input-group-addon"> - </a>
									{!! Form::date('to_date[]', $experience['to_date'], ['class'=>'form-control input', 'id'=>'sp_from_date']) !!}
								</div>
							</div>

							<div class="form-group">
								<label for="">Deskripsi Pekerjaan</label>
								{{ Form::textarea('jobdesc[]', $experience['jobdesc'], ['size' => '30x6', 'class'=>'form-control input-sm']) }}
							</div>

							<div class="form-group">
								<label for="">Alasan Resign</label>
								{{ Form::textarea('reason_resign[]', $experience['reason_resign'], ['size' => '30x6', 'class'=>'form-control input-sm']) }}
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
							<label for="">Nama Perusahaan</label>
							{!! Form::text('company[]', null, ['class'=>'form-control input-sm']) !!}
						</div>

						<div class="form-group">
							<label for="">Bidang Kerja</label>
							{!! Form::text('scope[]', null, ['class'=>'form-control input-sm']) !!}
						</div>

						<div class="form-group">
							<label for="">Posisi</label>
							{!! Form::select('position[]', $positions, null, ['placeholder' => '...', 'class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							<label for="">Pengalaman Kerja</label>
							<div class="input-group">
								{!!
									Form::date('from_date[]', null, ['class'=>'form-control input', 'id'=>'sp_from_date'])
									!!}
									<a class="input-group-addon"> - </a>
									{!! Form::date('to_date[]', null, ['class'=>'form-control input', 'id'=>'sp_from_date']) !!}
								</div>
							</div>

							<div class="form-group">
								<label for="">Deskripsi Pekerjaan</label>
								{{ Form::textarea('jobdesc[]', null, ['size' => '30x6', 'class'=>'form-control input-sm']) }}
							</div>

							<div class="form-group">
								<label for="">Alasan Resign</label>
								{{ Form::textarea('reason_resign[]', null, ['size' => '30x6', 'class'=>'form-control input-sm']) }}
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
