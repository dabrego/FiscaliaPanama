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
                            <li><a href="{{ url('/expediente') }}">Crear Nuevo Expediente</a></li>
                            <li ><a href="#">Estadísticas</a></li>
                            <li><a href="#">Seguimientos</a></li>
                        </ul>
                </nav>
                <div class="panel-body">
    <div class="container">
    <h1>Registro de Expediente</h1>
    <!--Vínculo para ir a la lista de usuarios-->
    <h4><a href="{{url('/dashboard')}}">Panel de Expedientes</a></h4>
    <hr>

    <form method="post" action="/fiscalias">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        
          <div class="form-group">
              <label for="exampleInputEmail">Título del caso</label>
             <textarea type="text" name="titulo" class="form-control" placeholder="Titulo"></textarea>
          </div>  

          
        <div class="btn-group" role="group" aria-label="...">
         <label for="exampleInputEmail">Juzgado</label>
         </br>
          <div class="col-xs-2">
             <select name="court_id">
             <option  value="#">Seleccione</option>
         @foreach($data as $row) 
           <option value="{{ $row->id }}">{{ $row->court_name}}</option>
           @endforeach
</select>

        </div>
        </div>

          </br>
            </br>

           <div class="form-group">
              <label for="exampleInputEmail">Descripción del Caso</label>
              <textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
          </div>  

            </br>


              <div class="form-group">
              <label for="exampleInputEmail">Las parte involucradas</label>
              <textarea type="text" name="involucrados" class="form-control" placeholder="Involucrados"></textarea>
          </div>  

            </br>



      <div class="form-group"> <!-- Date input -->
       <div class="col-xs-2">
        <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de Inicio del caso</label>
    <input class="form-control" type="date" value="2017-01-01" id="date" name="fecha_inicio" >
  </div>
  </div>

  </br>


          </br>
         </br>
          </br>
          </br>
      

          <div class="form-group">
            <label for="exampleInputEmail">Estatus</label>
             </br>
            <div class="col-xs-2">
          <select class="form-control" name="status">
           <option  value="#">Seleccione</option>
          <option  value="Pendiente">Pendiente</option>
          <option  value="Abierto">Abierto</option>
          <option  value="Cerrado">Cerrado</option>
        </select>
        </div>
          </div>
      
            </br>

  <div class="form-group">
  <label for="exampleInputEmail" >Ubicación</label>
            <label for="exampleInputEmail">Provincia</label>
             </br>
            <div class="col-xs-2">
          <select class="form-control" name="provinciafk">
          <option  value="#">Seleccione</option>
          <option  value="Panama">Panama</option>
          <option  value="Chiriqui">Chiriqui</option>
          <option  value="Los Santos">Los Santos</option>
        </select>
        </div>
  </br>
        <label for="exampleInputEmail">Distrito</label>
             </br>
            <div class="col-xs-2">
          <select class="form-control" name="distritofk">
          <option  value="#">Seleccione</option>
          <option  value="Panama">Panama</option>
          <option  value="David">David</option>
          <option  value="Las Tablas">Las Tablas</option>
        </select>
        </div>
  </br>
        <label for="exampleInputEmail">Corregimiento</label>
             </br>
            <div class="col-xs-2">
          <select class="form-control" name="corregimientofk">
          <option  value="#">Seleccione</option>
          <option  value="San Francisco">San Francisco</option>
          <option  value="Las Lomas">Las Lomas</option>
          <option  value="La Palma">La Palma</option>
        </select>
        </div>
          </div>
      
  </br>
          <div class="form-group">
            <label for="exampleInputEmail">Tipo de Caso</label>
             </br>
            <div class="col-xs-2">
          <select class="form-control" name="casetype_id">
           <option  value="#">Seleccione</option>
          <option  value="1">Robo</option>
          <option  value="2">Homicidio</option>
          <option  value="3">Extorsion</option>
        </select>
        </div>
          </div>


          
          </br>
          </br>
          </br>
          </br>
             


        </br>
          </br>
          </br>
      </br>
     
          </br>
          </br>
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