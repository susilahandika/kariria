@extends('masteradmin')

@section('header', 'Bobot Kriteria')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Setting Bobot</li>
@stop

@section('setting', 'active')
@section('weight', 'active')

@section('body')

	@if (session('success'))
		<div class="alert alert-warning">
			{{ session('success') }}
		</div>
	@endif

	@if (session('error'))
        <div class="alert alert-danger">
            <a>{{ session('error') }}</a>
        </div>
    @endif

	{!! Form::open(['route'=>['weights.store'], 'method' => 'post', 'id' => 'form1']) !!}

	<div class="box">
		<div class="box-body">
			<div class="row">
				<table class="table">
					@for ($i=0; $i <= count($criteria); $i++)
						<tr>
							@for ($j=0; $j <= count($criteria); $j++)
								@if ($i == 0 and $j == 0)
									<td></td>
								@elseif ($i > 0 and $j == 0)
									<td>{{ $criteria[$i-1]['criteria'] }}</td>
								@elseif ($i == 0 and $j > 0)
									<td>{{ $criteria[$j-1]['criteria'] }}</td>
								@else
									<td>
										@if ($i == $j)
											<input type='text' name="weight[{{ $i }}][{{ $j }}]" class='form-control input-sm' placeholder='' value="{{ $arrayWeights[$i][$j] }}" readonly>
										@elseif ($j < $i)
											<input type='text' name="weight[{{ $i }}][{{ $j }}]" class='form-control input-sm' placeholder='' value="{{ $arrayWeights[$i][$j] }}" readonly>
										@else
											<input type='text' name="weight[{{ $i }}][{{ $j }}]" class='form-control input-sm' placeholder='' value="{{ $arrayWeights[$i][$j] }}" required>
										@endif
									</td>
								@endif
							@endfor
						</tr>
					@endfor
				</table>
			</div>

			<div class="">
				<input type="submit" name="simpan" value="Simpan Bobot" class="btn btn-success btn-sm">
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@stop
