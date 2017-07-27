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
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
 
<style>
 .bgimg {
    background-image: url('/images/choco.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}


</style>
    </head>
    <body class="bgimg">

  <nav class=" navcolor navbar navbar-default navbar-static-top">
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
    <div class="row">
        <div class="panel-heading">Sistema de Expendientes « Dashboard {{ Auth::user()->name }}</div>
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
                                    <li><a href="/reportejuez1">Reporte Por Juez</a></li>
                                    <li><a href="/reporteprovincia">Provincia vs estatus</a></li>
                            
                                    <li ><a href="/estadistica">Estadísticas</a></li>
                                </ul>
                            </li>
                        </ul>

                    
                </nav>
                <div class="panel-body">
                    <div class='container'>
                    <div class="row col-sm-12">
                       <h1>Comentarios Sobre el Caso</h1>
</br></br></br></br></br></br> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#comment').one("focus", function() {
                $('#comment').parent().after('<div id="preview-box"><div class="comment-by">Live Comment Preview</div><div id="live-preview"></div></div>');
            });
            var $comment = '';
            $('#comment').keyup(function() {
            $comment = $(this).val();
            $comment = $comment.replace(/\n/g, "<br />").replace(/\n\n+/g, '<br /><br />');
            $('#live-preview').html( $comment );
        });
    });
</script>
<form action="/seguimientos" method="POST">
    <p><textarea name="comentarios" id="comentarios" cols="100" rows="7"></textarea></p>
    <p><input name="submit" value="Submit" type="submit" /></p>
</form>

 <!--<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comentarios</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1501182040123");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); </script> /*-->


<div class="container">
<div class="row">
    <a class="btn btn-info" href="{{ url('/home') }}">Back</a>
</div>    
</div>

</div>

   
 
      

    </body>
</html>

