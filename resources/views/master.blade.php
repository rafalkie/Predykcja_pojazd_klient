<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Predykcja</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }


        #piechart{
            display: table;
            margin: 0 auto;

        }
        .fa-btn {
            margin-right: 6px;
        }
        .card{
            padding:1rem;}
        .nav{
            margin-top:15px;
        }
        .container-fluid{
            padding:0 0;
        }
        .main{
            min-height: 80vh;
            /* equal to footer height */

        }
    </style>
</head>
<body >
<div class="container-fluid">
    <nav class="navbar navbar-default  ">
        <div class="pasek_g"></div>
        <div class="container">
            <div class="navbar-header " style="height:75px;">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->

                <a class="navbar-brand" href="/">
                    <span><img src="{{ URL::asset('/img/UR_logo.png')}}" width="50" height="50" /></span>
                    Aplikacje Internetowe II
                </a>


            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="/" >Start</a></li>
                    <li><a href="/predykcja">Predykcja</a></li>

                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a class="nav-link active" href="/dodaj">Dodaj osobe</a></li>
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Zaloguj</a></li>
                        <li><a href="{{ route('register') }}">Zarejestruj</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Wyloguj
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>



    <!-- .container -->
    <div class="container main ">

        @yield('content')

    </div><!-- end of .container -->




<hr>
<footer  >
    <div class="footer-copyright text-center ">
        <p>&copy; Aplikacje Internetowe II - Rafał Kieroński, Jakub Kuśnierz , Lucjan Kużniar</p>
    </div>
</footer>


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>
</html>
