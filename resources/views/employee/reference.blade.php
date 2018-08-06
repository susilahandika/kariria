@extends('employee.masteremployee')

@section('active_reference', 'active2')

@section('em_header', 'Referensi')

@section('em_body')

{!! Form::open(['route'=>['references.update', $reference[0]['email']], 'method' => 'put']) !!}

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

    <div class="group-input">
        <div><a>Permintaan Gaji*</a></div>
        <div>{!! Form::text('salary', (is_null($reference[0]['salary']) ? 0 : $reference[0]['salary']), ['class'=>'form-control input-sm']) !!}</div>
    </div>

    <div class="group-input">
        <div><a>Kompensasi Lain *</a></div>
        <div>{!! Form::textarea('compensation', $reference[0]['compensation'], ['class'=>'form-control', 'rows'=>5]) !!}</div>
    </div>

    <div class="group-input">
        <div><a>Mulai Kerja *</a></div>
        <div>
            {!! Form::select('start_work', [
                    'ASAP' => 'ASAP',
                    'Next Week' => 'Next Week',
                    'Next Month' => 'Next Month',
                ], $reference[0]['start_work'], ['class'=>'form-control', 'placeholder'=>'Pilih...']) !!}
        </div>
    </div>

    <div class="group-input">
        <div><a>Alasan Resign *</a></div>
        <div>{!! Form::textarea('reason_resign', $reference[0]['reason_resign'], ['class'=>'form-control', 'rows'=>5]) !!}</div>
    </div>

    <div class="group-input">
        <a>* Harus diisi</a>
    </div>

</div>

<div class="">
    <div>{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}</div> 
</div>
{!! Form::close() !!}

@stop