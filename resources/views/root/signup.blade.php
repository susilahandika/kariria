@extends('masterweb')

@section('login', 'active')

@section('body')

<link href="{{ asset('css/signup.css') }}" rel="stylesheet" />

<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Pendaftaran</li>
        </div>
    </div>
</div>

<div class="">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>        
    @endif

    <div class="container" >  
        {{-- <div class="col-lg-4 col-md-3 col-sm-2"></div> --}}
        <div class="col-md-6">
            <div class="row loginbox">                    
                <div class="col-lg-12">
                    <span class="singtext" >Pendaftaran </span><hr>   
                </div>

                <div class="col-md-12">

                	<div class="rolandthemes-circle-tabs">
                		<!-- Nav tabs -->
                		<ul class="nav nav-tabs" role="tablist">
                			<li role="presentation" class="active"><a href="#employee" aria-controls="employee" role="tab" data-toggle="tab">Pelamar Kerja</a></li>
                			<li role="presentation"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">Perusahaan</a></li>
                		</ul>

                		<!-- Tab panes -->
                		<div class="tab-content">
                			<div role="tabpanel" class="tab-pane active" id="employee"><br>
	                			{!! Form::open(['url' => 'storeemployee', 'method' => 'post']) !!}
        						<div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a>Nama Lengkap</a></label>
        				     		    {!! Form::text('fullname', old('fullname'), ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a>Email</a></label>
        				     		    {!! Form::text('email', old('fullname'), ['class'=>'form-control']) !!}
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a>Password</a></label>
        				     		    {!! Form::password('password', ['class'=>'form-control']) !!}
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a>Ulangi Password</a></label>
        				     		    {!! Form::password('password2', ['class'=>'form-control']) !!}
        				         	</div>
        				         </div>
								
								<div class="col-md-4">
									<a>Sudah punya akun?</a>
									<a class="link" href="{{ route('login') }}">Login disini</a>
        				         </div>

        				         <div class="col-md-3 pull-right">
        				             {!! Form::submit('Submit', ['class'=>'btn submitButton']) !!} 
        				         </div> 

        				         {!! Form::close() !!}
                			</div>
							
							{{-- 
							| Form signup perusahaan
							 --}}
                			<div role="tabpanel" class="tab-pane" id="company"><br>
                				{!! Form::open(['url' => 'storecompany', 'method' => 'post']) !!}
        						<div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a href="">Nama Perusahaan</a></label>
        				     		    {!! Form::text('companyname', null, ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a href="">Email</a></label>
        				     		    {!! Form::text('email', null, ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a href="">Password</a></label>
        				     		    {!! Form::text('password', null, ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

        				         <div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a href="">Ulangi Password</a></label>
        				     		    {!! Form::text('password2', null, ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

 								<div class="col-md-4">
 									<a href="">Sudah punya akun?</a>
 									<a class="link" href="{{ route('login') }}">Login disini</a>
         				         </div>

        				         <div class="col-md-3 pull-right">
        				             {!! Form::submit('Submit', ['class'=>'btn submitButton']) !!} 
        				         </div> 
        				         {!! Form::close() !!}
                			</div>
                		</div>

                	</div><!--/.rolandthemes-circle-tabs-->

                </div><!--/.col-md-12-->

            </div>

        </div>
    </div>
</div>

@stop
