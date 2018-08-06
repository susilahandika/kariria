<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kariria</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link href="{{ asset('css/profil.css') }}" rel="stylesheet">
  <link href="{{ asset('css/autocomplete.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/autocomplete.js') }}"></script>
  {{-- <script src="{{ asset('js/functions.js') }}"></script> --}}

  <style type="text/css" media="screen">
  .navbar-green { background-color: #3DE002}

  .container{
    padding-top: 10px;
  }

  [class^='select2'] {
    border-radius: 0px !important;
  }

  </style>


</head>

<body style="background-image: url('{{ asset('images/bg1.png') }}')">

  {{-- <nav class="navbar navbar-green">
  <div class="container">
  <div class="navbar-header">
  <a class="navbar-brand" href="#"> Kariria</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>

</div>
</nav>

@yield('body') --}}

<div class="container">
  <nav class="navbar navbar-custom navbar-static-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-home"></i> KARIRIA</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li class="@yield('profile', '')"><a href="{{ route('identities.index') }}">Profil</a></li>
          <li><a href="#">Notification <span class="badge">5</span></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>

        {{-- <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="{{ route('logout') }}">
          <div class="form-group">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Logout</button>
          </div>
        </form> --}}

      </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<div class="panel panel-success">
  <div class="panel-body">
    @yield('body')
  </div>
</div>
</div>

</body>

</html>
