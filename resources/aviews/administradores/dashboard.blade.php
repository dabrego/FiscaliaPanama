@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema de Expendientes « Dashboard {{$administrador_nombre}}</div>
                <div class="panel-body">
                    <div class='container'>
                        <div class="row">
                            @php
                                echo $role .' ' .$administrador_nombre;
                            @endphp

                        </div>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection