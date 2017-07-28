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
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
 
<style>
 .bgimg {
    background-image: url('/images/choco.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}


</style>
    </head>
    <body class="bgimg">

  <nav class=" navcolor navbar navbar-default navbar-static-top">
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
    <div class="row">
        <div class="panel-heading">Sistema de Expendientes « Seguimiento {{$nombre}}</div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <nav class="navbar navbar-inverse col-md-12">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/home') }}">Inicio</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="/seguimientos">Seguimientos</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Biblioteca de Casos<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/reportejuez1">Reporte Por Juez</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>
                            
                                    <li ><a href="/estadistica1">Estadísticas</a></li>
                                </ul>
                            </li>
                        </ul>

                    
                </nav>

                <div class="panel-body">
                    <div class='container'>
                    <div class="row col-sm-12">
                     <h1>Seguimiento de Casos </h1>
                        <div class="table-responsive">
                            @if($data)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Titulo de Caso</td>
                                        <td>No. de Juzgado</td>
                                        <td>Juzgado</td>
                                        <td>Descripción de Caso</td>
                                        <td>Partes Involucradas</td>
                                        <td>Fecha de Inicio</td>
                                        <td>Estado</td>
                                        <td>Ubicación: Provincia</td>
                                        <td>Distrito</td>
                                        <td>Corregimiento</td>
                                        <td>Tipo de Caso</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $row)
                                    <tr>
                                      <td>{{ $row->titulo }}</td>
                                      <td>{{ $row->court_id }}</td>
                                      <td>{{ $row->court_name }}</td>
                                      <td>{{ $row->descripcion }}</td>
                                      <td>{{ $row->involucrados }}</td>
                                      <td>{{ $row->fecha_inicio }}</td>
                                      <td>{{ $row->status }}</td>
                                      <td>{{ $row->provinciafk }}</td>
                                      <td>{{ $row->distritofk }}</td>
                                      <td>{{ $row->corregimientofk }}</td>
                                      <td>{{ $row->case_type }}</td>
                                       <td><a href="{{url('/comments',[$row->id])}}"><i class="material-icons" style="font-size:30px;color:green">assignment</i></a><td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>


<div class="container">
<div class="row">
    <a class="btn btn-info" href="{{ url('/home') }}">Back</a>
</div>    
</div>

</div>

   
 
      

    </body>
</html>
