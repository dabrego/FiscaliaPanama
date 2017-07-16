<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Task;

class DestroyTaskCommand extends Command
{   
    public $id;
    public $name;

    public function __construct($id)
    {
       $this->id = $id;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return Task::where('id', $this->id )->delete();
    }
}
