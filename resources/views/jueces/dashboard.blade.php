@extends('layouts.app')

@section('content')


     <div class="container">

          <h1>Dashboard</h1>
          </br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
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
    <h4><a href="{{ url('/expediente') }}">Crear Nuevo Expediente</a></h4>

    <!--<div class="btn-group btn-group-justified">
  <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
  <a href="{{ url('/') }}" class="btn btn-primary">Panel de Mantenimiento</a>
  <a href="{{ url('/') }}" class="btn btn-primary">Manejo de Usuarios</a>
</div>-->

    <hr>

        <div    class="table-responsive">
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
                 <td>{{ $row->court_id }}</td>
                <td>{{ $row->descripcion }}</td>
                <td>{{ $row->involucrados }}</td>
                <td>{{ $row->fecha_inicio }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->provinciafk }}</td>
                <td>{{ $row->distritofk }}</td>
                 <td>{{ $row->corregimientofk }}</td>
                <td>{{ $row->case_type }}</td>

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
