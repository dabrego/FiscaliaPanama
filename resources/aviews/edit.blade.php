@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class='container'>
	@foreach($errors->all() as $error)
		<p>{{$error}}</p>
	@endforeach
		<h1>Create new task</h1>
	@php
	// Can not use PUT through a form
	// and for that is used form spoofing
	@endphp
	{!! Form::open( ['action' => ['TaskController@update', $task->id ], 'method' => 'POST']) !!}
	@php
		echo Form::label('name', 'Name').'<br>';   
		echo '<p>'.Form::text('name', $value = $task->name).'</p>';
		echo '<p>'.Form::submit('Submit').'</p>';
		    // Using form spoofing
		echo method_field('PUT');
	@endphp
	{!! Form::close() !!}
</div>
@stop