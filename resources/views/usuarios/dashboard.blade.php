@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="panel-heading">Sistema de Expendientes « Dashboard {{ Auth::user()->name }}</div>
				<div class="col-md-12">
						<div class="panel panel-default">
								<nav class="navbar navbar-inverse col-md-12">
												<div class="navbar-header">
														<a class="navbar-brand" href="{{ url('/home') }}">Inicio</a>
												</div>
												<ul class="nav navbar-nav">
														<li><a href="{{ url('/expediente') }}">Crear Nuevo Expediente</a></li>
														<li ><a href="/estadistica">Estadísticas</a></li>
														<li><a href="#">Seguimientos</a></li>
												</ul>
								</nav>
								<div class="panel-body">
										<div class='container'>
												</br>
												<h4></h4>

												<hr>
												<div class="row col-sm-12">
												<div class="table-responsive ">
													@if($data)
													<table class="table table-striped">
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

																<td>
																</tr>
															</tbody>
															@endforeach
														</table>
														@endif
													</div>
													</div>

													<div class="container">
														<!-- <a href="{{ url('/index') }}">Panel de Registro</a>-->
														<a class="btn btn-info" href="{{ url('/') }}">Back</a>
													</div>

										</div>
								</div>
						</div>
				</div>
		</div>
</div>
@endsection

