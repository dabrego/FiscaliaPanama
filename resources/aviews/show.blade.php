@extends('layouts.app')

@section('title', 'Show Task')

@section('content')
	<div class='container'>
		<div class='row'>
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
	                <h2>{{$task->name}}</h2>
	            	<p>Date Created: {{ 
						date('F d, Y', strtotime($task->created_at) )
						}}
					</p>
					<div align='right'>
                		<a href='/task/{{$task->id}}/edit'>Edit</a>
                	</div>
                </div>
                
                
                <div class="panel-body">
				<br>
				
			@php
				echo Form::open(['method' => 'DELETE', 'route' => ['task.destroy', $task->id]]);
				echo '<p>'.Form::submit('Delete').'</p>';
			@endphp
			</div></div></div>
		</div>
	</div>
@stop