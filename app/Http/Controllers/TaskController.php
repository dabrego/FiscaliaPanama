<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Controllers\Controller;
use App\Task;
use App\Console\Commands\StoreTaskCommand;
use App\Console\Commands\UpdateTaskCommand;
use App\Console\Commands\DestroyTaskCommand;

use App\Policies\TaskPolicy;

class TaskController extends Controller
{
    public function index(){
    	$heading = 'My Tasks';
    	$tasks = Task::all();
    	// $tasks = Task::where('id', '=', 2)->get();
    	// return view('tasks', ['tasks' => $tasks, 'title'=>$heading] );
        return view('tasks', ['tasks' => $tasks, 'title'=>$heading] );
    }

    public function create(){
    	return view('create');
    }

    public function store(StoreTaskRequest $request){
    	
    	// Get the input field
    	$name = $request->input('name');

    	// Create Command
    	// Instatiate
    	$command = new StoreTaskCommand($name);
    	// Run Command
    	$this->dispatch($command);

    	// Back slash refers to an upper level
    	// Redirect is a helper
    	return \Redirect::route('task.index')->with('message', 'Task Added');
    }

    // These methods are called by signature also
    public function show($id){
    	$tasks = Task::find($id);
    	return view('show', ['task' => $tasks]); 
    	
    }

    public function edit($id){
    // return 'this is task/'.$id.'/edit';
    	$task = Task::find($id);
    	return view('edit', array('task' => $task));
    }

    public function update(Request $request, $id){
    	// Edit screen with update method
    	// Get input
    	$name = $request->input('name');

    	$command = new UpdateTaskCommand($id, $name);

    	// Run Command
    	$this->dispatch($command);
    	// Back slash refers to an upper level
    	// Redirect is a helper
    	return \Redirect::route('task.index')->with('message','Task Updated');
    }

    public function destroy($id){

    	$command = new DestroyTaskCommand($id);

    	// Run Command
    	$this->dispatch($command);
    	// Back slash refers to an upper level
    	// Redirect is a helper
    	return \Redirect::route('task.index')->with('message','Task Removed');
    }

}













