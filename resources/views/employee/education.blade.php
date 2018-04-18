@extends('employee.masteremployee')

@section('active_education', 'active2')

@section('em_header', 'Pendidikan')

@section('em_body')

<div class="panel panel-default box">
    <div class="group-input">
        <div class="group-input">
            <div><a>Jenjang</a></div>
            <div>
                <select name="" class="form-control">
                    <option value="">...</option>
                    <option value="">SMP</option>
                    <option value="">SMA</option>
                    <option value="">Sarjana (S1)</option>
                    <option value="">Magister (S2)</option>
                    <option value="">Doktor (S3)</option>
                </select>
            </div>
        </div>

        <div class="group-input">
            <div><a>Nama Sekolah/Universitas/Perguruan Tinggi</a></div>
            <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
        </div>

        <div class="row group-input">
            <div class="col-md-6">
                <div><a>Jurusan</a></div>
                <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
            </div>

            <div class="col-md-6">
                <div><a>IPK / Nilai</a></div>
                <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
            </div>
        </div>

        <div class="row group-input">
            <div class="col-md-6">
                <div><a>Dari</a></div>
                <div><input type="text" class="form-control" name="" value="" placeholder=""></div>
            </div>

            <div class="col-md-6">
                <div><a>Hingga</a></div>
                <div>
                    <select name="" class="form-control">
                        <option value="">0</option>
                    </select>
                </div>
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