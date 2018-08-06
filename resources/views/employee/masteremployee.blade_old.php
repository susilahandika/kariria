@extends('masteruser')

@section('profile', 'active')

@section('body')

<style type="text/css">
	.form-control, .btn{
		border-radius: 0px;
	}

	.group-input{
		padding-bottom: 10px;
	}

</style>

<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="index.html">Employee</a></li>
            <li>Profile</li>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="col-md-3 column margintop20">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a style="background-color: white; border: 1px solid #dadada"></a></li>
                <li><a href="{{ route('identities.index') }}" class="@yield('active_profile', '')"><span class="glyphicon glyphicon-chevron-right"></span> Identitas Diri</a></li>
                <li><a href="{{ route('educations.index') }}" class="@yield('active_education', '')"><span class="glyphicon glyphicon-chevron-right"></span> Pendidikan</a></li>
                {{-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Preferensi</a></li> --}}
                <li><a href="{{ route('skills.index') }}" class="@yield('active_skill', '')"><span class="glyphicon glyphicon-chevron-right"></span> Kemampuan</a></li>
                <li><a href="{{ route('experiences.index') }}" class="@yield('active_experience', '')"><span class="glyphicon glyphicon-chevron-right"></span> Pengalaman Kerja</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Organisasi</a></li>
                {{-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Prestasi</a></li> --}}
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Seminar dan Pelatihan</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Bahasa</a></li>
                <!-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Publikasi</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Proyek</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Tautan Probadi</a></li> -->
            </ul>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default box">
                <div class=""><h3>@yield('em_header', 'Employee')</h3><hr></div>
                
                @yield('em_body')
            </div>
        </div>
    </div>
</div>

@stop