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
table {
  background-color: #F1EADA;
   
  
    vertical-align: middle;
    border-color: inherit;
}
thead{
  background-color: #E2D6B9;
   
     display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}


</style>


    </head>
    <body class="bgimg">

  <nav  class="navcolor navbar navbar-default navbar-static-top">
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

          <h1>Dashboard</h1>
          </br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/estadistica">Estadísticas</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Panel de Mantenimiento<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/showubicacion">Ubicación</a></li>
          <li><a href="/showcourt">Juzgado</a></li>
          <li><a href="/register">Usuarios </a></li>
        </ul>
      </li>

      <li><a href="#">Seguimientos</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes<span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="/reportejuez">Por Juez</a></li>
          <li><a href="/reporteprovincia">Provincia vs estatus</a></li>
        </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-left">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
  </div>
</nav>
</br>


    <hr>

        <div  class="table-responsive">
          <p>Hola <b>{{$nombre}}</b> por el momento estamos validando su información, cuando esto ocurra un administrador gestionara su cuenta en breve!!
           </p>
            
      
        </div>




         <br>
       <br>
       <br>
       <br>
       <br>

        <br>
       <br>
       <br>
       <br>
           <div class="container">
        <!-- <a href="{{ url('/index') }}">Panel de Registro</a>-->
        <a class="btn btn-info" href="{{ url('/') }}">Back</a>
            </div>
              
        </div>
   

   

<!--<div class="container">
        <div class="row">
            <h1>Agregar Artículo</h1>
            <form action="/articulo/add" method="post" name="frmadd">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="txttitulo" placeholder="Title">
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="txtresumen" placeholder="description"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
            </form>
        </div>

    </div>-->
      

    </body>
</html>

