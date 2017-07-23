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
		<body class="bgimg" >
			<nav class="navcolor navbar navbar-default navbar-static-top">
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
		<h1>Registro de Expediente</h1>
		<!--Vínculo para ir a la lista de usuarios-->
		<h4><a href="{{url('/dashboard')}}">Panel de Expedientes</a></h4>
		<hr>

<form method="post" action="/fiscalias">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">


			<div class="row form-group col-xs-8">
				<label for="exampleInputEmail">Título del caso</label>
				<textarea type="text" name="titulo" class="form-control" placeholder="Titulo"></textarea>
			</div>  


		<div class="btn-group" role="group" aria-label="..." >
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

<div class="row form-group">
	<label for="exampleInputEmail">Descripción del Caso</label>
	<textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
</div>  

</br>


<div class="row form-group">
	<label for="exampleInputEmail">Las parte involucradas</label>
	<textarea type="text" name="involucrados" class="form-control" placeholder="Involucrados"></textarea>
</div>  

</br>



<div class="row form-group"> <!-- Date input -->
 <div class="col-xs-2">
	<label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de Inicio del caso</label>
	<input class="form-control" type="date" value="2017-01-01" id="date" name="fecha_inicio" >
</div>
</div>

</br>


<div class="row form-group">
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

<div class="row form-group">
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
<div class="row form-group">
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
	

			
<div class="row">
	<div class = "form-group col-xs-2">
		<select class="form-control" name="jueces">

		<option selected value="">Seleccione</option>	
			@php 
				for($i = 0; $i < count($juez); $i++){
				echo $juez[$i]['name'];
			@endphp
					<option value='{{$juez[$i]['name']}}'>{{$juez[$i]['name']}}</option>
			@php
				}
			@endphp
					
		
		
			
		
			
			
			
		</select>
	</div>
</div>

<div class="row">
	<div class="form-group col-xs-2">
		<label><input type="checkbox" name="abogados" value="abogado1" > Abogado 1
		</label>
		<label><input type="checkbox" name="abogados" value="abogado2" > Abogado 2
		</label>	
		<label><input type="checkbox" name="abogados" value="abogado3" > Abogado 3
		</label>	
	</div>
</div>
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