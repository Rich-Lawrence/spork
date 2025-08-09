<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('yo');
        $users = DB::table('users')->get();
        foreach($users as $user){
            var_dump($user->name, $user->email);
        }
    }
}
