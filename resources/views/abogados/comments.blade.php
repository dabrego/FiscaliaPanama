  @extends('layouts/app')
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
                         <hr>



        <div class="table-responsive">
        @php
        $debug = true;
            if($debug){
                echo '<pre>';
                print_r($user['id']);
                echo '</pre>';
            }
        @endphp

        @if($file_assoc)
           
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Fecha de Inicio</th> 
                            <th>id</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th>Corregimiento</th>    
                            <th>Titulo</th>    
                            <th>Descripción</th>    
                            <th>Involucrados</th> 
                            <th>Estatus</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $file_assoc['fecha_inicio']  }}</td>
                            <td>{{ $file_assoc['id'] }}</td>
                            <td>{{ $file_assoc['provinciafk'] }}</td>
                            <td>{{ $file_assoc['distritofk'] }}</td>
                            <td>{{ $file_assoc['corregimientofk'] }}</td>
                            <td>{{ $file_assoc['titulo'] }}</td>
                            <td>{{ $file_assoc['descripcion'] }}</td>
                            <td>{{ $file_assoc['involucrados'] }}</td>
                            <td>{{ $file_assoc['status'] }}</td> 
                        </tr>
                    </tbody>
                </table>
            
           

        @endif

        @if($data)
        
        <table class="table">
        <thead>
            <tr>
            <td>Num.</td>
            <td>Comentario</td>
            <td>Fecha de Creación</td>
            <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->comentarios }}</td>
                <td>{{ $row->created_at }}</td>            
            </tr>
            </tbody>
            @endforeach
        </table>
        @endif
        </div>
         <br>

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
<form action="/seguimientoscomentario" method="POST">
    <p><textarea name="comentarios" id="comentarios" cols="100" rows="7"></textarea></p>
    <input type="text" hidden name="user_id" value="{{$user['id']}}">
    <input type="text" hidden name="file_id" value="{{$file_assoc['id']}}">
     <input type="hidden" name="created_at" value="{{date('y-m-d')}}">
    <p><input name="submit" value="Comentar" type="submit" /></p>
</form>

<div class="container">
<div class="row">
    <a class="btn btn-info" href="{{ url('/home') }}">Back</a>
</div>    
</div>

</div>
@endsection

