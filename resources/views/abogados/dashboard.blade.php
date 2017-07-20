@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema de Expendientes « Dashboard Juez</div>
                <div class="panel-body">
                    <div class='container'>
                        <div class="row"></div>

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