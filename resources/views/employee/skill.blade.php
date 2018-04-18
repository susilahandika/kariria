@extends('employee.masteremployee')

@section('active_skill', 'active2')

@section('em_header', 'Kemampuan')

@section('em_body')

<div class="group-input">
    <div class="row">
        <div class="col-md-9">
            <div><a>Kemampuan</a></div>
            <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
        </div>

        <div class="col-md-3">
            <div><a>Durasi (Tahun)</a></div>
            <div>
                <select name="" class="form-control">
                    <option value="">0</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="text-right">
    <a href="" class="btn btn-warning">Tambah</a>
</div>

<hr>
<div class="group-input">
    <div><input type="submit" class="btn btn-primary" name="" value="Simpan"></div>
</div>

@stop