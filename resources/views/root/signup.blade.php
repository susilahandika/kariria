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
                		<!-- Tab panes -->
                		<div class="tab-content">
                			<div role="tabpanel" class="tab-pane active" id="employee"><br>
	                			{!! Form::open(['url' => route('register'), 'method' => 'post']) !!}
        						<div class="col-lg-12 col-md-12 col-sm-12">
        				         	<div class="group-form">
        				     			<label><a>Nama Lengkap</a></label>
        				     		    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!} 
        				         	</div>
        				         </div>

                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="group-form">
                                        <label><a>Type</a></label>
                                        {!! Form::select('type', array('1' => 'Pelamar', '2' => 'Perusahaan'), null, ['class'=>'form-control', 'placeholder'=>'pilih type..']) !!} 
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
        				     		    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
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
						</div>

                </div><!--/.col-md-12-->

            </div>

        </div>
    </div>
</div>

@stop
