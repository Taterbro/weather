<?php

namespace App\Console\Commands;

use App\Events\weatherevent;
use Illuminate\Console\Command;

class weathercommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:weathercommand';

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
        
    }
}
