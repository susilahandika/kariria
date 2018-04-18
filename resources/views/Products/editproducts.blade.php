@extends('masteradmin')

@section('header', 'Edit Products')

@section('body')

<div class="box">
	<div class="box-body">
		{!! Form::open(['url' => 'updateproducts', 'method' => 'post']) !!}

		<table class="table table-responsive">
			<tr>
				<td style="width: 10%">ID</td>
				<td style="width: 1%">:</td>
				<td>{!! Form::text('id', $x[0]->id, ['class'=>'form-control']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%">Name</td>
				<td style="width: 1%">:</td>
				<td>{!! Form::text('name', $x[0]->name, ['class'=>'form-control']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%">Description</td>
				<td style="width: 1%">:</td>
				<td>{!! Form::text('description', $x[0]->description, ['class'=>'form-control']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%">Price</td>
				<td style="width: 1%">:</td>
				<td>{!! Form::text('price', $x[0]->price, ['class'=>'form-control']) !!}</td>
			</tr>

			<tr>
				<td style="width: 10%">Stock</td>
				<td style="width: 1%">:</td>
				<td>{!! Form::text('stock', $x[0]->stock, ['class'=>'form-control']) !!}</td>
			</tr>
			
			<tr>
				<td style="width: 10%"></td>
				<td style="width: 1%"d></td>
				<td>{!! Form::submit('Ubah', ['class'=>'btn btn-primary']) !!}</td>
			</tr>
		</table>

		{!! Form::close() !!}
	</div>
</div>

<a href="../" class="btn btn-warning" title="">List Products</a>

@stop

