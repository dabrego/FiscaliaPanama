@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel-heading">Sistema de Expendientes « Dashboard {{$nombre}}</div>
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
                                    <li><a href="/reportejuez2">Reporte Por Juez</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>
                                    <li ><a href="/estadistica1">Estadísticas</a></li>
                                </ul>
                            </li>
                        </ul>

                    
                </nav>
                <div class="panel-body">
                    <div class='container'>
                    <div class="row col-sm-12">
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
                                      <td><a href="/seguimientos/comentario">{{ $row->descripcion }}</a></td>
                                      <td>{{ $row->involucrados }}</td>
                                      <td>{{ $row->fecha_inicio }}</td>
                                      <td>{{ $row->status }}</td>
                                      <td>{{ $row->provinciafk }}</td>
                                      <td>{{ $row->distritofk }}</td>
                                      <td>{{ $row->corregimientofk }}</td>
                                      <td>{{ $row->case_type }}</td>
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
      
@endsection

