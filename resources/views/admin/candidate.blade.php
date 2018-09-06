@extends('masteradmin')

@section('header', 'Find Employee')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Find Candidate</li>
@stop

@section('mn_findemployee', 'active')

@section('body')

	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#dataTables-example').DataTable({
				"columnDefs": [
					{
						"targets": [ 0 ],
						"visible": false,
						"searchable": false
					}
				],
				responsive: true,
				"ordering": false,
				"bLengthChange": false,
			});

			$('#dataTables-example tbody').on('click', '#bt_interview', function () {
				event.preventDefault();
				var data = table.row( $(this).parents('tr') ).data();
				$('#myModal').modal('toggle');

				$('#email').val(data[0]);
				$('#oldurl').val(window.location.search);
				$('#score').val("");
				$('#reason').val("");

				// alert(window.location.search);
			} );
		});
	</script>

	<div class="box">
		<div class="box-body">
			<div class="" style="padding-top:5px;">
				<a href="#" class="btn btn-success"><i class="fa fa-filter" aria-hidden="true"></i></a><hr>
			</div>
			<div class='table-responsive'>
				<table width="100%" class="table table-striped table-hover" id="dataTables-example">
					<thead>
                		<tr>
                			<th>Email</th>
                			<th>Foto</th>
                			<th>Detail</th>
                			<th>...</th>
                		</tr>
                	</thead>
					<tbody>
						@if (!is_null($candidates) and !session('error'))
							@foreach ($candidates as $candidate)
								@php
						            $path_img = '/images/userPhoto/' . $candidate->photo;
						        @endphp
								<tr>
									<td style="width:20%;">{{ $candidate->email }}</td>
									<td style="width:20%;"><img src="{{ URL::asset($path_img) }}" width="128" height="128"></td>
									<td>
										<h4>{{ $candidate->name }}</h4> <br>
										{{ $candidate->email }} <br>
										<i class="fa fa-mobile" aria-hidden="true"></i> {{ $candidate->telp }}
									</td>
									<td style="vertical-align: bottom !important;" align="right">
										<a href="{{ route('candidates.show', $candidate->email) }} " class="btn btn-success btn-sm">Detail</a>
										<a href="#" class="btn btn-success btn-sm" id="bt_interview">Interview</a>
										<a href="#" class="btn btn-success btn-sm">Proses</a>
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Input Hasil Interview</h4>
				</div>
				<div class="modal-body">

					{!! Form::open(['route'=>['insertInterview'], 'method' => 'post']) !!}

					<div class="form-group">
						<label for="">Score</label>
						<input type="hidden" class="form-control" id="email" name="email" placeholder="">
						<input type="hidden" class="form-control" id="oldurl" name="oldurl" placeholder="">
						<input type="text" class="form-control" id="score" name="score" placeholder="">
					</div>

					<div class="form-group">
						<label for="">Keterangan</label>
						<textarea name="reason" id="reason" rows="8" class="form-control" cols="4"></textarea>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>

				{!! Form::close() !!}
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

@stop
