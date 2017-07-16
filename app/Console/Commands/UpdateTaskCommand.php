<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Task;

class UpdateTaskCommand extends Command
{   
    public $id;
    public $name;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update_task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command updates the task info.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($id, $name)
    {
       $this->id = $id;
       $this->name = $name;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return Task::where('id', $this->id )->update(array('name'=>$this->name));
    }
}
