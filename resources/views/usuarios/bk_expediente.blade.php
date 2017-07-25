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
														<li><a href="{{ url('/expediente') }}">Crear Nuevo Expediente</a></li>
												</ul>
								</nav>
								<div class="panel-body">
										<div class="container">
														<h1>Registro de Expediente</h1>
														<!--Vínculo para ir a la lista de usuarios-->
														<h4><a href="{{url('/dashboard')}}">Panel de Expedientes</a></h4>
														<form method="post" action="/fiscalias">
															{{ csrf_field() }}
															<div class="row" >
																<div class= "col-xs-8 form-group">
										              <label for="titulo">Título del caso</label>
										             <textarea type="text" name="titulo" class="form-control" placeholder="Titulo"></textarea>
										          	</div>
										          </div>


										        <div class="row">
										          <div class="col-xs-2 form-group">
										          <label for="juzgado">Juzgado</label>
										          </br>
										          	<select name="court_id" class="form-control">
										          		<option  value="#">Seleccione</option>
										          		@foreach($data_court as $row) 
										          		<option value="{{$row->id}}">{{ $row->court_name}}</option>
										          		@endforeach
										          	</select>
										          </div>
										        </div>

										        <div class="row">
															<div class="col-xs-8 form-group">
																<label for="descripcion">Descripción del Caso</label>
																<textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
															</div>
														</div>

														<div class="row">
															<div class="col-xs-8 form-group">
																<label for="exampleInputEmail">Las parte involucradas</label>
																<textarea type="text" name="involucrados" class="form-control" placeholder="Involucrados"></textarea>
															</div> 
														</div>

														<div class="row">
															<div class="col-xs-8 form-group"> <!-- Date input -->
																<label for="fecha_inicio" class="col-2 col-form-label">Fecha de Inicio del caso</label>
																<input class="form-control" type="date" value="2017-01-01" id="date" name="fecha_inicio" >
															</div>
														</div>
														
														<div class="row">
														<div class="col-xs-2 form-group">
															<label for="status">Estatus</label>
															</br>
															<select class="form-control" name="status">
																<option  value="#">Seleccione</option>
																<option  value="Pendiente">Pendiente</option>
																<option  value="Abierto">Abierto</option>
																<option  value="Cerrado">Cerrado</option>
															</select>
														</div>
													</div>

															<div class="row" >
																<div class= "col-xs-2 form-group">
																		<label for="provincia">Provincia</label>
																		</br>
																		<select name="provinciafk" class="form-control">
																			<option  value="#">Seleccione</option>
																			@foreach($data_location as $row) 
																			<option value="{{ $row->id }}">{{ $row->provincia}}</option>
																			@endforeach
																		</select>
																</div>
															</div>
															
															<div class="row">
																<div class="col-xs-2 form-group">
																<label for="distrito">Distrito</label>
																</br>
																	<select class="form-control" name="distritofk">
																		<option  value="#">Seleccione</option>
																		@foreach($data_location as $row) 
																		<option value="{{ $row->id }}">{{ $row->distrito}}</option>
																		@endforeach
																	</select>
																</div>
															</div>

															<div class="row">
															<div class="col-xs-2 form-group">
															<label for="exampleInputEmail">Corregimiento</label>
															</br>
																<select class="form-control" name="corregimientofk">
																	<option  value="#">Seleccione</option>
																	@foreach($data_location as $row) 
																	<option value="{{ $row->id }}">{{ $row->corregimiento}}</option>
																	@endforeach
																</select>
															</div>
															</div>

															<div class="row">
																<div class="col-xs-2 form-group">
																	<label for="casetype_id">Tipo de Caso</label>
																	</br>
																	<select class="form-control" name="casetype_id">
																		<option  value="#">Seleccione</option>
																		@foreach($data_casetype as $row) 
																		<option value="{{ $row->id }}">{{ $row->case_type}}</option>
																		@endforeach
																	</select>
																</div>
															</div>

															<div class="row">
																<div class="form-group">
																	<label for="jueces">Jueces</label>
																</br>
																<div class="col-xs-2">
																	<select class="form-control" name="juez">
																		<option  value="#">Seleccione</option>
																		@foreach($jueces as $row) 
																		<option value="{{$row->user_id}}"> 
                                    {{$row->name}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
														

														<div class="row">
															<div class="form-group">
																<label for="abogados">Abogados</label>
																<br>
																<div class="col-xs-2">
																	@for($i = 0; $i < count($abogados); $i++) 
																	<p><input type="checkbox" 
																						value="{{ $abogados[$i]->user_id,'asd' }}" 
																						name="abogados[{{$i}}]"> {{$abogados[$i]->name}}</p>
																	@endfor
																</div>
															</div>
														</div>


															<button type="submit" class="btn btn-default">Registrar</button>
														</form>
										</div>
								</div>
						</div>
							<div>	<a class="btn btn-info" href="{{ URL::previous() }}">Back</a></div>
				</div>
		</div>
</div>
		
@endsection