@extends('masteradmin')

@section('header', 'Find Employee')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Detail Candidate</li>
@stop

@section('mn_findemployee', 'active')

@section('body')

	<style media="screen">
		.td1{
			width: 20%;
		}

		.td2{
			width: 5px;
		}
	</style>

	<div class="box">
		<div class="box-body">
			<div class='table-responsive'>
				<h4>Identitas Diri</h4><hr>
				@php
					$path_img = '/images/userPhoto/' . $candidates[0]->photo;
				@endphp

				<img class="" src="{{ URL::asset($path_img) }}" width="128" height="128">

				<table class='table table-striped table-hover table-condensed' width="100%">
					<tbody>
						@if (!is_null($candidates) and !session('error'))
							@foreach ($candidates as $candidate)
								<tr>
									<td class="td1">Nama Lengkap</td>
									<td class="td2">:</td>
									<td>{{ $candidate->name }}</td>
								</tr>

								<tr>
									<td class="td1">Telp</td>
									<td class="td2">:</td>
									<td>{{ $candidate->telp }}</td>
								</tr>

								<tr>
									<td class="td1">Email</td>
									<td class="td2">:</td>
									<td>{{ $candidate->email }}</td>
								</tr>

								<tr>
									<td class="td1">Tanggal Lahir</td>
									<td class="td2">:</td>
									<td>{{ Carbon\Carbon::parse($candidate->birthday)->format('d M Y') }}</td>
								</tr>

								<tr>
									<td class="td1">Jenis Kelamin</td>
									<td class="td2">:</td>
									<td>{{ ($candidate->gender == 'P') ? 'Pria' : 'Wanita' }}</td>
								</tr>

								<tr>
									<td class="td1">Status Pernikahan</td>
									<td class="td2">:</td>
									<td>{{ ($candidate->married == '1') ? 'Sudah Menikah' : 'Belum Menikah' }}</td>
								</tr>

								<tr>
									<td class="td1">Alamat</td>
									<td class="td2">:</td>
									<td>{{ $candidate->address }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<h4>Referensi</h4><hr>
				<table class='table table-striped table-hover table-condensed' width="100%">
					<tbody>
						@if (!is_null($candidates) and !session('error'))
							@foreach ($candidates as $candidate)
								<tr>
									<td class="td1">Salary</td>
									<td class="td2">:</td>
									<td>{{ $candidate->salary }}</td>
								</tr>

								<tr>
									<td class="td1">Kompensasi</td>
									<td class="td2">:</td>
									<td>{{ $candidate->compensation }}</td>
								</tr>

								<tr>
									<td class="td1">Mulai Kerja</td>
									<td class="td2">:</td>
									<td>{{ $candidate->start_work }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<h4>Pendidikan</h4><hr>
				<table class='table table-bordered table-hover table-condensed' width="100%">
					<thead>
						<tr>
							<th>Jenjang</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Nilai</th>
							<th>Sejak</th>
							<th>Hingga</th>
						</tr>
					</thead>
					<tbody>
						@if (!is_null($educations) and !session('error'))
							@foreach ($educations as $education)
								<tr>
									<td>{{ $education->level }}</td>
									<td>{{ $education->education_loc }}</td>
									<td>{{ $education->major }}</td>
									<td>{{ $education->value }}</td>
									<td>{{ Carbon\Carbon::parse($education->from_date)->format('d M Y') }}</td>
									<td>{{ Carbon\Carbon::parse($education->to_date)->format('d M Y') }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<h4>Pengalaman</h4><hr>
				<table class='table table-bordered table-hover table-condensed' width="100%">
					<thead>
						<tr>
							<th>Perusahaan</th>
							<th>Bidang Kerja</th>
							<th>Posisi</th>
							<th>Sejak</th>
							<th>Hingga</th>
							<th>Alasan Resign</th>
						</tr>
					</thead>
					<tbody>
						@if (!is_null($experiences) and !session('error'))
							@foreach ($experiences as $experience)
								<tr>
									<td width="20%">{{ $experience->company }}</td>
									<td width="10%">{{ $experience->scope }}</td>
									<td width="15%">{{ $experience->position }}</td>
									<td width="15%">{{ Carbon\Carbon::parse($experience->from_date)->format('d M Y') }}</td>
									<td width="15%">{{ Carbon\Carbon::parse($experience->to_date)->format('d M Y') }}</td>
									<td width="25%">{{ $experience->reason_resign }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<h4>Kemampuan</h4><hr>
				<table class='table table-bordered table-hover table-condensed' width="50%">
					<thead>
						<tr>
							<th>Kemampuan</th>
							<th>Level</th>
						</tr>
					</thead>
					<tbody>
						@if (!is_null($skills) and !session('error'))
							@foreach ($skills as $skill)
								<tr>
									<td width="20%">{{ $skill->skill_type }}</td>
									<td>{{ $skill->score }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<h4>Bahasa</h4><hr>
				<table class='table table-bordered table-hover table-condensed' width="50%">
					<thead>
						<tr>
							<th>Bahasa</th>
							<th>Level</th>
						</tr>
					</thead>
					<tbody>
						@if (!is_null($languages) and !session('error'))
							@foreach ($languages as $language)
								<tr>
									<td width="20%">{{ $language->name }}</td>
									<td>{{ $language->score }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop
