
@extends('masteradmin')

@section('header', 'Data Products')

@section('body')

<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#dataProducts').DataTable({
	        responsive: true
	    });
	});
</script>

<div class="row">
	<div class="col-xs-12">

		<div class="box">
			<!-- /.box-header -->
			<div class="box-body">

				<table class="table table-bordered" id="dataProducts">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Stock</th>
							<th>Process</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dataproducts as $p)
							<tr>
								<td>{{ $p->id }}</td>
								<td>{{ $p->name }}</td>
								<td>{{ $p->description }}</td>
								<td>{{ $p->price }}</td>
								<td>{{ $p->stock }}</td>
								<td>
									<a href="editproducts/{{ $p->id }}" class="btn btn-warning btn-sm" title="">Update</a>
									<a href="deleteproducts/{{ $p->id }}" class="btn btn-danger btn-sm" title="">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	
		<div style="margin-bottom: 10px;">
			<a href="addproducts" class="btn btn-primary btn-sm" title="">Add</a>
		</div>
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->

@stop