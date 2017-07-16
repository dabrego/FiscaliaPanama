<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

use App\Task;

class StoreTaskCommand extends Command {
	public $name;

 	public function __construct($name){
 		$this->name = $name;
 	}

 	public function handle(){
 		return Task::create([
 			'name' => $this->name 
 			]);
 	}

}