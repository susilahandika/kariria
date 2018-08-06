@extends('employee.masteremployee')

@section('active_skill', 'active2')

@section('em_header', 'Kemampuan')

@section('em_body')

<script type="text/javascript">
    $(document).ready(function() {
        $('#bt_tambah').click(function(event) {
            $('#form_kemampuan').append('<div class="panel panel-success">' +
									        '<div class="panel-body">' +
									            '<div class="row">' +
									                '<div class="col-md-12">' +
									                     '<div><a>Position</a></div>' +
									                     '<div>{!! Form::text('position[]', null, ['class'=>'form-control']) !!}</div>' +
									             '</div>' +
									            '</div>' +

									            '<div class="row">' +
									                '<div class="col-md-12">' +
									                     '<div><a>Sub Position</a></div>' +
									                     '<div>{!! Form::text('subposition[]', null, ['class'=>'form-control']) !!}</div>' +
									                '</div>' +
									            '</div>' +

									            '<div class="row">' +
									                '<div class="col-md-8">' +
									                     '<div><a>Kemampuan</a></div>' +
									                     '<div>{!! Form::text('skill[]', null, ['class'=>'form-control']) !!}</div>' +
									                 '</div>' +

									                 '<div class="col-md-3">' +
									                     '<div><a>Durasi</a></div>' +
									                     '<div>{!! Form::select('year[]', $years, null, ['class' => 'form-control', 'placeholder' => '...']) !!}</div>' +
									                '</div>' +

									                '<div class="col-md-1">' +
									                    '<div><a>&nbsp</a></div>' +
									                    '<a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' + 
									                '</div>' + 
									            '</div>' + 
									        '</div>' + 
									    '</div>');
        });

        $("body").on('click', '#bt_hapus', function(event) {
            event.preventDefault();
            $(this).parents(':eq(3)').remove();
        });
    });
</script>

{!! Form::open(['route'=>['skills.store'], 'method' => 'post', 'id' => 'form1']) !!}

{!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}

@if (session('success'))
<div class="alert alert-success">
    <a>{{ session('success') }}</a>
</div>
@endif

<!-- @if ($skills != null)
    @foreach ($skills as $skill)
        <div class="row">
            <div class="col-md-8">
                <div><a>Kemampuan</a></div>
                <div>{!! Form::text('skill[]', $skill->skill, ['class'=>'form-control']) !!}</div>
            </div>

            <div class="col-md-3">
                <div><a>Durasi</a></div>
                <div>{!! Form::select('year[]', $years, $skill->year, ['class' => 'form-control', 'placeholder' => '...']) !!}</div>
           </div>

           <div class="col-md-1">
               <div><a>&nbsp</a></div>
               <a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           </div>
        </div>
    @endforeach

@endif -->

<div class="group-input" id="form_kemampuan">
    <!-- <div class="panel panel-success">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                     <div><a>Position</a></div>
                     <div>{!! Form::text('position[]', null, ['class'=>'form-control']) !!}</div>
                 </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                     <div><a>Sub Position</a></div>
                     <div>{!! Form::text('subposition[]', null, ['class'=>'form-control']) !!}</div>
                 </div>
            </div>
    
            <div class="row">
                <div class="col-md-8">
                     <div><a>Kemampuan</a></div>
                     <div>{!! Form::text('skill[]', null, ['class'=>'form-control']) !!}</div>
                 </div>
    
                 <div class="col-md-3">
                     <div><a>Durasi</a></div>
                     <div>{!! Form::select('year[]', $years, null, ['class' => 'form-control', 'placeholder' => '...']) !!}</div>
                </div>
    
                <div class="col-md-1">
                    <div><a>&nbsp</a></div>
                    <a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="text-left">
    <a href="#" class="btn btn-warning" id="bt_tambah"><i class="fa fa-plus" aria-hidden="true"></i></a>
</div>

<hr>
<div class="group-input">
    <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
</div>

{!! Form::close() !!}

@stop