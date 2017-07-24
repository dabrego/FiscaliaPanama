@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-heading">Sistema de Expendientes « Dashboard {{$nombre}}</div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <nav class="navbar navbar-inverse col-md-12">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="/seguimiento2">Casos Asignados</a></li>

                            <li><a href="#">Seguimientos</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Biblioteca de Casos<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/reportejuez">Reporte Por Juez</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>
                                    <li><a href="/reporteprovincia1">Provincia vs estatus</a></li>
                                    <li ><a href="/estadistica1">Estadísticas</a></li>
                                </ul>
                            </li>
                        </ul>

                    
                </nav>
                <div class="panel-body">
                    <div class='container'>
                        
                            
                        
                        @php
                            echo $role;
                        @endphp
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection