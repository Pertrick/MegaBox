<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\ProcessAirtime;
use App\Jobs\ProcessData;
use App\Console\Commands\ProcessDataJob;
use App\Console\Commands\ProcessAirtimeJob;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->job(new ProcessAirtime)->everyMinute();
        $schedule->job(new ProcessData)->everyMinute();
        $schedule->command('process-airtime:run')->everyMinute();
        $schedule->command('process-data:run')->everyMinute();
     
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
