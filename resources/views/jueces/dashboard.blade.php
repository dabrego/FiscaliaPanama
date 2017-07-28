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
     
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Biblioteca de Casos<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/reportejuez1">Reporte Por Juez</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>

                                    <li ><a href="/estadistica1">Estadísticas</a></li>

                                    <li ><a href="/estadistica1">Seguimiento</a></li>
                                </ul>
                            </li>
    </ul>
   
  </div>
</nav>
</br>
   </h4>

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
