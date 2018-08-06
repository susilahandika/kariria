@extends('employee.masteremployee')

@section('active_training', 'active2')

@section('em_header', 'Identitas Diri')

@section('em_body')

{!! Form::open(['route'=>['file.update', $userPhoto[0]['email']], 'method' => 'put', 'enctype'=>'multipart/form-data']) !!}

<meta name="csrf_token" content="{{ csrf_token() }}" />

{!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}

<div class="panel panel-default box">

    @if (session('success'))
    <div class="alert alert-success">
        <a>{{ session('success') }}</a>
    </div>
    @endif

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><a>{{  $error }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        @php
            $path_img = '/images/userPhoto/' . $userPhoto[0]['photo'];
        @endphp

        <img src="{{ URL::asset($path_img) }}" width="128" height="128">

    </div>

    <div class="form-group">
        <label for="photo">File:</label>
        <input type="file" class="form-control" id="photo" name="photo">
    </div>

    <div class="form-group">
        <label for="photo">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <a href="#" id="test_list" class="btn btn-md btn-primary">Test List</a>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
    </div>

</div>

<div class="">
    <div>{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}</div>
</div>
{!! Form::close() !!}

<script type="text/javascript">
    $(document).ready(function() {
        $("#test_list").click(function(e) {
            e.preventDefault();

            $.ajax({
                url: "list",
                type: "post",
                dataType:"text",
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    'id': $('input[name ="name"]').val(),
                    'name': "susila",
                },
                success: function(result){
                    // alert(result['msg']);
                    alert(result);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                cache: false
            });


        });
    });
</script>

@stop
