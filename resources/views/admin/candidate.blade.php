@extends('masteradmin')

@section('header', 'Find Employee')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Find Candidate</li>
@stop

@section('mn_findemployee', 'active')

@section('body')

	<div class="box">
		<div class="box-body">
			<div class="" style="padding-top:5px;">
				<a href="#" class="btn btn-success"><i class="fa fa-filter" aria-hidden="true"></i></a><hr>
			</div>
			<div class='table-responsive'>
				<table class='table table-striped table-hover table-condensed' width="100%">
					<tbody>
						@if (!is_null($candidates) and !session('error'))
							@foreach ($candidates as $candidate)
								@php
						            $path_img = '/images/userPhoto/' . $candidate['photo'];
						        @endphp
								<tr>
									<td style="width:20%;"><img src="{{ URL::asset($path_img) }}" width="128" height="128"></td>
									<td>
										<h4>{{ $candidate['name'] }}</h4> <br>
										{{ $candidate['email'] }} <br>
										<i class="fa fa-mobile" aria-hidden="true"></i> {{ $candidate['telp'] }}
									</td>
									<td style="vertical-align: bottom !important;" align="right">
										<a href="{{ route('candidates.show', $candidate['email']) }} " class="btn btn-warning btn-sm">Detail</a>
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

@stop
