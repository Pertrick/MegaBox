<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessData;

class ProcessDataJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process-data:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process Data';

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
     * @return int
     */
    public function handle()
    {
        ProcessData::dispatch();
    }
}
