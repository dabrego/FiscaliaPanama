<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CoffeeShop - @yield('title')</title>
	<link rel='stylesheet' href='/css/style.css'>
	<link rel='stylesheet' href='/css/bootstrap.css'>
	<script scr='/js/bootstrap.js'></script>
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id = 'app'>
	 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
            {{ 'Task Manager' }}</a>
				
			</div>

        </a>
	</nav>
	<div class="navbar-header">
		<!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ 'Task Manager' }}
        </a>
        <a class="nav-link" href='/task'>Home <span class="sr-only">(current)</span></a>
			<a class="nav-link" href='/task/create'>Create New Task <span class="sr-only">(current)</span></a>
    </div>

			

	<div class='clr'></div>
	@if(Session::has('message'))
		<div class="container">
			{{Session::get('message')}}
		</div>
	@endif
	@yield('content')
</div> 	

	
</body>
</html>