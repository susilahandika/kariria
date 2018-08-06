@extends('employee.masteremployee')

@section('active_education', 'active2')

@section('em_header', 'Pendidikan')

@section('em_body')

  <script src="{{ asset('js/education.js') }}"></script>

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

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
        <tr>
          <td><a>ID</a></td>
          <td><a>Jenjang</a></td>
          <td><a>Tempat Pendidikan</a></td>
          <td><a>Jurusan</a></td>
          <td><a>Nilai</a></td>
          <td><a>Dari</a></td>
          <td><a>Hingga</a></td>
          <td><a>...</a></td>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($educations as $education) { ?>
          <tr>
            <td><?php echo $education->id; ?></td>
            <td><a><?php echo $education->level; ?></a></td>
            <td><a><?php echo $education->education_loc; ?></a></td>
            <td><a><?php echo $education->major; ?></a></td>
            <td><a><?php echo $education->value; ?></a></td>
            <td><a><?php echo $education->from_date; ?></a></td>
            <td><a><?php echo $education->to_date; ?></a></td>
            <td>
              {!! Form::open(['route'=>['educations.destroy', $education->id], 'method' => 'delete']) !!}
              <a href="#" class="btn btn-warning btn-sm" id="bt_ubah"><i class="fa fa-edit"></i></a>
              <a href="#" id="bt_hapus"><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
              {!! Form::close() !!}
            </td>
          </tr>
          <?php } ?>
        </tbody>

      </table>

      <div>
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal" title="" id="bt_tambah">Tambah</a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width: 70%;">
        <div class="modal-content">

          {!! Form::open(['route'=>['educations.store'], 'method' => 'post', 'id' => 'form1']) !!}

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Pendidikan</h4>
          </div>
          <div class="modal-body">

            <div class="alert alert-danger" id="error_simpan"></div>

            {!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}

            <div class="group-input">
              <div class="group-input">
                <div><a>Jenjang</a></div>
                <div>
                  {{ Form::select('level', $levels, null, ['class' => 'form-control', 'placeholder' => '...', 'id'=>'sp_level']) }}
                </div>
              </div>

              <div class="group-input">
                <div><a>Nama Sekolah/Universitas/Perguruan Tinggi</a></div>
                <div>{!! Form::text('education_loc', null, ['class'=>'form-control input-sm', 'id'=>'sp_education_loc']) !!}</div>
              </div>

              <div class="row group-input">
                <div class="col-md-6">
                  <div><a>Jurusan</a></div>
                  <div>{!! Form::text('major', null, ['class'=>'form-control input-sm', 'id'=>'sp_major']) !!}</div>
                </div>

                <div class="col-md-6">
                  <div><a>IPK / Nilai</a></div>
                  <div>{!! Form::text('value', null, ['class'=>'form-control input-sm', 'id'=>'sp_value']) !!}</div>
                </div>
              </div>

              <div class="row group-input">
                <div class="col-md-6">
                  <div><a>Dari</a></div>
                  <div>
                    {!! Form::date('from_date', null, ['class'=>'form-control input', 'id'=>'sp_from_date']) !!}
                  </div>
                </div>

                <div class="col-md-6">
                  <div><a>Hingga</a></div>
                  <div>
                    {!! Form::date('to_date', null, ['class'=>'form-control input', 'id'=>'sp_to_date']) !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-danger" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success" id="bt_modal_simpan">Simpan</button>
          </div>

          {!! Form::close() !!}

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width: 70%;">
        <div class="modal-content">

          {!! Form::open(['route'=>['educations.update', Auth::user()->email], 'method' => 'put']) !!}

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Pendidikan</h4>
          </div>
          <div class="modal-body">

            {!! Form::hidden('email', Auth::user()->email, ['class'=>'form-control input-sm']) !!}
            {!! Form::hidden('id', null, ['class'=>'form-control input-sm', 'id'=>'ed_id']) !!}

            <div class="group-input">
              <div class="group-input">
                <div><a>Jenjang</a></div>
                <div>
                  {{ Form::select('level', $levels, null, ['class' => 'form-control', 'placeholder' => '...', 'id'=>'ed_level']) }}
                </div>
              </div>

              <div class="group-input">
                <div><a>Nama Sekolah/Universitas/Perguruan Tinggi</a></div>
                <div>{!! Form::text('education_loc', null, ['class'=>'form-control input-sm', 'id'=>'ed_education_loc']) !!}</div>
              </div>

              <div class="row group-input">
                <div class="col-md-6">
                  <div><a>Jurusan</a></div>
                  <div>{!! Form::text('major', null, ['class'=>'form-control input-sm', 'id'=>'ed_major']) !!}</div>
                </div>

                <div class="col-md-6">
                  <div><a>IPK / Nilai</a></div>
                  <div>{!! Form::text('value', null, ['class'=>'form-control input-sm', 'id'=>'ed_value']) !!}</div>
                </div>
              </div>

              <div class="row group-input">
                <div class="col-md-6">
                  <div><a>Dari</a></div>
                  <div>
                    {!! Form::date('from_date', null, ['class'=>'form-control input', 'id'=>'ed_from_date']) !!}
                  </div>
                </div>

                <div class="col-md-6">
                  <div><a>Hingga</a></div>
                  <div>
                    {!! Form::date('to_date', null, ['class'=>'form-control input', 'id'=>'ed_to_date']) !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-danger" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success" id="bt_modal_ubah">Ubah</button>
          </div>

          {!! Form::close() !!}

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


  @stop
