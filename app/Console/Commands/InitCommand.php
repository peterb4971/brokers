<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate', ['--force' => true]);
        $this->call('migrate:status');

        $this->call('storage:link');
    }
}
