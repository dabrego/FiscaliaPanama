@extends('layouts.app')
@section('content')
     <div class="container">

          <h1>Registro de Usuario</h1>
          </br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="#">Lista de Casos</a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mantenimiento de Código<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/showubicacion">Ubicacion</a></li>
                <li><a href="/showcourt">Juzgados</a></li>
                <li><a href="/showregistro">Usuarios</a></li>
            </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Biblioteca de Casos<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/reportejuez">Reporte Por Juez</a></li>
                <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>

                <li ><a href="/estadistica1">Estadísticas</a></li>

                <li ><a href="/estadistica1">Seguimiento</a></li>
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
    <h4><a href="{{ url('/createregistro') }}">Crear Usuario</a></h4>

    <hr>
        <div class="table-responsive">
       

        @if($data)

        @php
        $debug = false;
        if ($debug){
          echo '<pre>';
          print_r($data);
          echo '</pre>';
        }
        @endphp
        
        <table class="table">
        <thead>
        <tr>
          
            <td>Nombre de Usuario</td>
            <td>Correo Electrónico</td>
            <td>Rol de Usuario</td>
            <td>Descripción</td>
            <td>Fecha de Creacion</td>
            <td>Fecha de Actualizacion</td>
          
            <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
            
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td>{{ $row->slug }}</td>
              <td>{{ $row->description }}</td>
              <td>{{ $row->created_at }}</td>
              <td>{{ $row->updated_at }}</td>

                <td>
               <!-- <a href="{{url('/carepanel',[$row->id])}}" class="btn-btn-info">Detalle</a></td>
                <td>
                <a href="{{url('/diagnosis',[$row->id])}}" class="btn-btn-info">Detalle</a>
                </td>-->
            </tr>
            </tbody>
            @endforeach
        </table>
        @endif
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
   

@endsection

