@extends('masteradmin')

@section('header', 'Add Products')

@section('body')

<div class="box">
	<div class="box-body">
		{!! Form::open(['url' => 'saveproducts', 'method' => 'post']) !!}

		<table class="table table-responsive">
			<tr>
				<td style="width: 10%;">ID</td>
				<td style="width: 1%;">:</td>
				<td>{!! Form::text('id', null, ['class'=>'form-control input-sm']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%;">Name</td>
				<td style="width: 1%;">:</td>
				<td>{!! Form::text('name', null, ['class'=>'form-control input-sm']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%;">Description</td>
				<td style="width: 1%;">:</td>
				<td>{!! Form::text('description', null, ['class'=>'form-control input-sm']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%;">Price</td>
				<td style="width: 1%;">:</td>
				<td>{!! Form::text('price', null, ['class'=>'form-control input-sm']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%;">Stock</td>
				<td style="width: 1%;">:</td>
				<td>{!! Form::text('stock', null, ['class'=>'form-control input-sm']) !!}</td>
			</tr>
			
			<tr>
				<td style="width: 10%;"></td>
				<td></td>
				<td>{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}</td>
			</tr>
		</table>

		{!! Form::close() !!}
	</div>
</div>

<a href="listproducts" class="btn btn-warning" title="">List Products</a>

@stop

