<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Hash;
use App\User;

class UserCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Create SuccessFully';

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
        $input['name'] = $this->ask('What is your Name?');
        $input['email'] = $this->ask('What is your Email?');
        $input['password'] = $this->secret('What is your Name?');
        $input['password'] = Hash::make($input['password']);
        $input['role'] = $this->ask('What is your Role? like admin, customer,agent');

        DB::table('users')->insert($input);
        $this->info('User Create Successfully');

    }
}
