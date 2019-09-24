<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hash;
use DB;
use App\User;

class TaskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Task:Command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Registered Successful';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
            }
}
