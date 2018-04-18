<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kariria</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="{{ route('root') }}"><h1><span>Karir</span>ia</h1></a>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="{{ route('employeehome') }}" class="mainmenu @yield('home', '')">Home</a></li>
                                <li role="presentation"><a href="{{ route('interview') }}" class="mainmenu @yield('interview', '')">Interview</a></li>
                                <li role="presentation"><a href="{{ route('profile') }}" class="mainmenu @yield('profile', '')">Profil</a></li>
                                <li role="presentation"><a href="{{ route('root') }}" class="mainmenu">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('body')

    <footer>
        <div class="footer">
            <div class="container">
                <div class="social-icon">
                    <div class="col-md-4">
                        <ul class="social-network">
                            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-4">
                    <div class="copyright">
                        &copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <a href="https://bootstrapmade.com/bootstrap-business-templates/">Bootstrap Business Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pull-right">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>