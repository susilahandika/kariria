<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
</head>

<body>

  <div class="container">
    <div class="row" id="contents">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control input-sm" id="" placeholder="">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control input-sm" id="" placeholder="">
          </div>

          <div class="form-group">
            <label for="">Level</label>
            {{ Form::select('level', $data, null, ['placeholder' => 'Select education level', 'class' => 'form-control']) }}
          </div>

          <div id="area-del-content"></div>

        </div>
      </div>
    </div>

    <div id="copyContents"></div>

    <div class="row">
      <button class="btn btn-primary" id="add">add a dropdown</button>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>

  <script>
  $(document).ready(function () {
    $('select').select2();

    $("#add").click(function () {
      $myClone = $("#contents").clone()
                  .appendTo('#copyContents');

      $myClone.find("span").remove();
      $myClone.find('input[type="text"]').val("").end();
      $myClone.find('select').select2({
        width: '100%',
      });
      $myClone.find('#area-del-content')
              .append(
                '<div class="pull-right">' +
                '<a href="#" id="del-content" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
                '</div>'
              );
    });

    $("body").on('click', '#del-content', function(event) {
      event.preventDefault();
      $(this).parents(':eq(3)').remove();
    });
  });
  </script>
</body>

</html>
