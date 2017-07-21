 <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Fiscalía de la República de Panamá</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
 
<style>
 .bgimg {
    background-image: url('/images/choco.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}

.navcolor {
  background-image: url('/images/choco.png');
}
</style>
    </head>
    <body class="bgimg">

       <nav class="navcolor navbar navbar-default navbar-static-top">
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
                        Fiscalía de la República de Panamá
                        <!--{{ config('app.name', 'Hospital Medicare') }}-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
           <script src="{{ asset('js/app.js') }}"></script>
           
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->

    <div class="container">
    <h1>Mantenimiento de Juzgado</h1>
    <!--Vínculo para ir a la lista de usuarios-->
  
    <hr>
    <h5><a href="{{ url('/dashboard') }}">Dashboard</a><a href="{{ url('/showcourt') }}">->Mantenimiento de Juzgado</a><label>->Crear nueva Juzgado<</label></h5>
    <form method="post" action="/juzgados">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            
        <label for="exampleInputEmail">Nombre de Juzgado </label>
        <input type="text" name="court_name" class="form-control" placeholder="Nombre de Juzgado">

        </div>
      

     
          

          <button type="submit" class="btn btn-default">Registrar</button>

    </form>


        </div>

       <br>
       <br>
       <br>
       <br>
       <br>
           <div class="container">
        
        <a class="btn btn-info" href="{{ URL::previous() }}">Back</a>
            </div>

    </body>
</html>