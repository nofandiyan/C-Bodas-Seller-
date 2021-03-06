<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C-Bodas</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- bootsrap datepicker-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    
    <style type="text/css">
        .wrapper {
            width: 700px;
            position: relative;
        }
        .wrapper .thumbnails {
            width: 150px;
            float: left;
            top: 0;
            left: 0;
        }
        .wrapper a {
            margin: 2px;
        }
        .wrapper img {
            border: 1px solid #000;
        }
        .wrapper label > img {
            opacity: 0.6;
        }
        .wrapper label > img:hover {
            opacity: 1;
        }
        .wrapper input {
            display: none;
        }
        .wrapper input:checked + .full-image {
            display: block;
        }
        .wrapper input:checked ~ img {
            opacity: 1;
        }
        .wrapper .full-image {
            display: none;
            position: absolute;
            top: 0;
            left: 125px;
        }
        .wrapper .description {
            width:95%;
            padding:5px;
            background-color:#DDDDDD;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    C-Bodas
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Daftar</a></li>
                    </ul>
                @else
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!-- @if (Auth::user()->userAs == 1)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Lalala<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('user/profile') }}">Profil</a></li>
                                    <li><a href="">Lapak</a></li>
                                </ul>
                            </li>
                        @endif -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    @if (Auth::user()->userAs == 1)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
