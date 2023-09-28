<!DOCTYPE html>
<html>

<head>
    <?php $url = URL::to('/') ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <title> TDAHjudando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{asset('/img/TDAHjudandoIcon.png')}}" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/menu.scss')}}">
    <link href="{{asset('/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    </style>
</head>

<body style="background-color:gray;">


    <nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" @if(Auth::check()) href="{{ route('home') }}" @endif @if(Auth::guest()) href="{{ route('login') }}" @endif><img class=".img-fluid" src="{{asset('img/TDAHjudando.png')}}" style="width:80%" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="bg-dark text-center text-white fixed-bottom">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            JoshTec © 2023 Copyright:
        </div>
        <!-- Copyright -->
    </footer>
    <script src="{{asset('/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/menu.js')}}"></script>
    <script src="{{asset('/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>

</html>