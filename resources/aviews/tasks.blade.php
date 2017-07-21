@extends('layouts.app')
	

@section('title', 'My Tasks')

@section('content')
<div class='container'>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
					<h1>{{ $title }}</h1>
				</div>
				<div class="panel-body">
					@if($tasks)
						<ul>
							@foreach($tasks as $task)
								<li><a href="/task/{{$task->id}}"> {{ $task->name }} </a></li>
							@endforeach
						</ul>
					@else
						<p>No Tasks found</p>
					@endif
				</div>
</div>
@stop

