<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ url('/css/bootstrap-theme.min.css') }}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    @yield('content-css')

    <!-- Scripts -->


</head>
<body>
    <div id="app">
        <!--<nav class="navbar navbar-default navbar-static-top">-->
            <div class="container">
                

               
                        @if (Auth::guest())
            <nav class="navbar navbar-default">
            <!--<div class="container">-->
                <!-- Brand and toggle get grouped for better mobile display -->

                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/principal/ini') }}">DEMACO</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/principal/nosotros') }}">NOSOTROS</a></li>
                            <li><a href="#">PROYECTOS</a></li>
                            <li><a href="#">PUBLICACIONES</a></li>
                            <li><a href="{{ url('/login') }}">INTRANET</a></li>
                            <li><a href="#">CONTACTO</a></li>
                            
                        </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
                            <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                        @else

                        <nav class="navbar navbar-default">
            <!--<div class="container">-->
                <!-- Brand and toggle get grouped for better mobile display -->

                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">DEMACO</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                        {{ Auth::user()->name }} 
                                    </a>
                                </li>

                                <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>   
                                   
                            </ul>
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @include('layouts.menu')

        

        @yield('content')
    </div>

    <!-- Scripts -->
    
    <script src="{{ url('/js/app.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/npm.js') }}"></script>
    



    @yield('js')

</body>
</html>