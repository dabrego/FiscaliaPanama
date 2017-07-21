@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class='container'>
	@foreach($errors->all() as $error)
		<p>{{$error}}</p>
	@endforeach
	<h1>Create new task</h1>
	{!! Form::open(['action' => 'TaskController@store']) !!}
		@php
		    echo Form::label('name', 'Name').'<br>';   
		    echo '<p>'.Form::text('name').'</p>';
		    echo '<p>'.Form::submit('Submit').'</p>';
		@endphp
	{!! Form::close() !!}
</div>
@stop