@extends('masterweb')

@section('login', 'active')

@section('body')

<link href="{{ asset('css/login.css') }}" rel="stylesheet" />

<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Login</li>
        </div>
    </div>
</div>

<div class="services">
    <div class="container" >  
        <div class="col-lg-4 col-md-3 col-sm-2"></div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="row loginbox">                    
                <div class="col-lg-12">
                    <span class="singtext" >login </span>   
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input class="form-control" type="text" placeholder="Please enter your email" > 
                </div>
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <input class="form-control" type="password" placeholder="Please enter password" >
                </div>
                <div class="col-lg-6  col-md-6 col-sm-6">
                    <a href="#" class="btn  submitButton">Submit </a> 
                </div> 
                <div class="col-lg-6  col-md-6 col-sm-6">
                    <a href="#" class="btn  submitButton">Signup </a> 
                </div>                    

            </div>
            <div class="row forGotPassword">
                <a href="#" >Forgot Password? </a> 
            </div>
            <br>                
            <br>

        </div>
    </div>
</div>

@stop
