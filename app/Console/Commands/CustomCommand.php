<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:user {id}';

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
        $id = $this->argument('id');
        $user=User::find($id)->first();
        $this->info($user);
    }
}
