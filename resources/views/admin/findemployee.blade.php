@extends('masteradmin')

@section('header', 'Find Employee')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Find Candidate</li>
@stop

@section('mn_findemployee', 'active')

@section('body')

	<div class="row">
		<div class="col-xs-12">

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<label>Majors</label>
						<select class="form-control select2" multiple="multiple" data-placeholder="Select..." style="width: 100%;">
							<option>Teknik Informatika</option>
							<option>Ilmu Komputer</option>
							<option>Teknik Industri</option>
							<option>Komputer Akuntansi</option>
						</select>
					</div>

					<div class="form-group">
						<label>Skill</label>
						<select class="form-control select2" multiple="multiple" data-placeholder="Select..." style="width: 100%;">
							<option>PHP</option>
							<option>Laravel</option>
							<option>MYSQL</option>
							<option>ORACLE</option>
						</select>
					</div>

					<div class="form-group col-md-12 row">
						<div class="col-md-12 row"><label>Age</label></div>
						<div class="col-md-4 row">
							<div class="input-group">
								<input type="text" class="form-control input-sm">
								<span class="input-group-addon"> - </span>
								<input type="text" class="form-control input-sm">
							</div>
						</div>
					</div>

					<div class="">
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="" value="Get Employee">
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

@stop